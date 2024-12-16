import os
import csv
import time
from telnetlib import EC
import unicodedata
import re

import requests
from selenium import webdriver
from selenium.common import NoSuchElementException
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup
from selenium.common import TimeoutException
from config import products_category_tab
import uuid

folder_name = "scrapped_data"
images_folder_name = os.path.join(folder_name, "images")
data_folder_name = os.path.join(folder_name, "data")
product_id = 1


CATEGORY_ID_MAP = {}

def initialize_category_map(category_map):
    global CATEGORY_ID_MAP
    CATEGORY_ID_MAP = category_map


def clean_string(input_string):
    input_string = input_string.replace('ł', 'l').replace('Ł', 'L')

    normalized = unicodedata.normalize('NFKD', input_string)
    without_polish = ''.join([c if not unicodedata.combining(c) else '' for c in normalized])

    cleaned = re.sub(r'[^\w\-]', '', without_polish.replace(" ", "_"))

    return cleaned


def load_category_mapping(file_path):
    """
    Wczytuje plik CSV z kategoriami i tworzy mapę nazwa_kategorii -> ID_kategorii.
    """
    category_mapping = {}
    try:
        with open(file_path, mode='r', encoding='utf-8') as file:
            reader = csv.DictReader(file)
            for row in reader:
                category_name = row['Name *'].strip()
                category_id = row['Category ID'].strip()
                category_mapping[category_name] = category_id
    except Exception as e:
        print(f"Błąd podczas wczytywania pliku kategorii: {e}")

    return category_mapping


def make_dirs():
    directories = [folder_name, images_folder_name, data_folder_name]

    for directory in directories:
        if not os.path.isdir(directory):
            os.makedirs(directory, exist_ok=True)
            print(f"Folder {directory} został utworzony.")
        else:
            print(f"Folder {directory} już istnieje.")


def tmp(driver):

    page_source = driver.page_source
    soup = BeautifulSoup(page_source, 'html.parser')

    for product in soup.find_all('div', {'data-product-id': True}):
        try:
            # Pobieranie kategorii
            category = product.get('data-category', '').strip()

            name_tag = product.find('a', class_='prodname')
            name = name_tag.get('title', '').strip() if name_tag else ''
            product_url = name_tag['href'] if name_tag else ''

            # Pobieranie miniaturki i ceny
            img_small_url, price = get_image_and_price(product)
            if img_small_url is None:  # Pomijamy produkt, jeśli brakuje obrazów
                continue


            # Otwieranie strony produktu i pobieranie szczegółowych danych
            if product_url:
                product_url = 'https://wloczkowyswiat.pl' + product_url if not product_url.startswith('http') else product_url
                attributes, img_orginal_url = open_product_and_get_data(product_url, driver)
                save(attributes, category, name, price, img_small_url, img_orginal_url)
            else:
                attributes = {}


        except Exception as e:
            print(f'Nie udało się pobrać danych dla produktu: {e}')

def get_image_and_price(product):
    img_small_url = []
    try:
        img_tags = product.find_all('img', limit=1)
        for img_tag in img_tags:
            img_url = img_tag.get('data-src') or img_tag.get('src')
            if img_url and not img_url.startswith('http'):
                img_url = 'https://wloczkowyswiat.pl' + img_url
            img_small_url.append(img_url)

        # Pobieranie ceny
        cena_tag = product.find('div', class_='price f-row')
        price = cena_tag.find('em').text.strip() if cena_tag else ''
        return img_small_url, price

    except Exception as e:
        print(f"Nie udało się pobrać obrazów lub ceny: {e}")
        return None, None

def get_product_attributes(driver):
    attributes = []

    try:
        rows = driver.find_elements("xpath", "//div[@id='box_productdata']//table[@class='table']//tbody//tr")

        for row in rows:
            try:
                attribute = {}
                name_element = row.find_element("xpath", ".//td[contains(@class, 'name')]")
                name = name_element.text.strip()

                value_element = row.find_element("xpath", ".//td[contains(@class, 'value')]")
                value = value_element.text.strip()

                attribute[name] = value
                attributes.append(attribute)

            except NoSuchElementException as e:
                pass
    except NoSuchElementException as e:
        print("Brak tabeli atrybutów")
    img_original_url = ''

    try:
        WebDriverWait(driver, 10).until(lambda d: d.execute_script("return document.readyState") == "complete")

        soup = BeautifulSoup(driver.page_source, 'html.parser')
        link_tag = soup.find('link', {'itemprop': 'image'})

        img_original_url = link_tag.get('href')

        if img_original_url and not img_original_url.startswith('http'):
            img_original_url = 'https://wloczkowyswiat.pl' + img_original_url

        print("URL pełnowymiarowego obrazu:", img_original_url)


    except TimeoutException:
        print("Nie znaleziono elementu <a class='js_gallery-anchor-image'> w podanym czasie.")
        return None
    except NoSuchElementException:
        print("Element <a class='js_gallery-anchor-image'> nie istnieje.")
        return None

    return attributes, img_original_url

def open_product_and_get_data(product_url, driver):
    driver.execute_script("window.open(arguments[0]);", product_url)
    driver.switch_to.window(driver.window_handles[1])  # Przełączamy się na nowe okno

    try:
        WebDriverWait(driver, 10).until(
            lambda d: d.execute_script("return document.readyState") == "complete"
        )

        attributes, img_original_url = get_product_attributes(driver)

    except Exception as e:
        print(f"Nie udało się pobrać danych dla produktu {product_url}: {e}")
        attributes = []

    finally:
        driver.close()
        driver.switch_to.window(driver.window_handles[0])

    return attributes, img_original_url

def generate_csv_for_categories_and_subcategories(driver):
    file_path = os.path.join(folder_name, 'categories.csv')
    with open(file_path, mode='w', newline='', encoding='utf-8') as category_file:

        category_writer = csv.writer(category_file)

        # Nagłówki do pliku CSV
        category_writer.writerow([
            'Category ID', 'Active (0/1)', 'Name *', 'Parent category',
            'Root category (0/1)', 'Description', 'Meta title',
            'Meta keywords', 'Meta description', 'URL rewritten', 'Image URL'
        ])

        # Szukanie głównych kategorii
        categories = driver.find_elements("xpath", "//ul[@class='standard']/li")
        category_list = []
        index = 3  # Początkowy ID kategorii

        for category in categories:
            try:
                link_element = category.find_element("tag name", "a")
                name = link_element.text
                category_url = link_element.get_attribute("href")
                category_list.append((index, name, category_url))

                # Zapisz główną kategorię
                category_writer.writerow([
                    index, 1, name, "Strona główna", 0, '',
                    f'Meta title {name}', f'Meta keywords {name}',
                    f'Meta description {name}',
                    name.lower().replace(" ", "-"), ''
                ])
                index += 1

            except NoSuchElementException as e:
                print(
                    f'Nie udało się pobrać danych dla kategorii {category.get_attribute("id") if category else "Brak ID"}: {e}'
                )

        # Pobieranie podkategorii
        for cat_id, name, category_url in category_list:
            driver.get(category_url)
            index = open_subcategories(driver, name, cat_id, index, category_writer)


def open_subcategories(driver, parent_name, parent_id, start_index, category_writer):
    soup = BeautifulSoup(driver.page_source, 'html.parser')
    category_elements = soup.select("li.current ul li[id^='category_']")

    for element in category_elements:
        try:
            # Pobierz nazwę i URL podkategorii
            link_element = element.find("a")
            subcategory_name = link_element.text.strip()
            subcategory_url = link_element.get("href")

            # Zapisz podkategorię w pliku CSV
            category_writer.writerow([
                start_index, 1, subcategory_name, parent_name, 0, '',
                f'Meta title {subcategory_name}', f'Meta keywords {subcategory_name}',
                f'Meta description {subcategory_name}',
                subcategory_name.lower().replace(" ", "-"), ''
            ])
            start_index += 1

            # Wejdź głębiej, jeśli są kolejne podkategorie
            driver.get(subcategory_url)
            start_index = open_subcategories(driver, subcategory_name, start_index, parent_id, category_writer)
        except Exception as e:
            print(f"Nie udało się pobrać podkategorii: {e}")

    driver.back()
    return start_index

def load_category_mapping(file_path):
    category_mapping = {}
    try:
        with open(file_path, mode='r', encoding='utf-8') as file:
            reader = csv.DictReader(file)
            for row in reader:
                category_name = row['Name *'].strip()
                category_id = row['Category ID'].strip()
                category_mapping[category_name] = category_id
    except Exception as e:
        print(f"Błąd podczas wczytywania pliku kategorii: {e}")

    return category_mapping

def save(attributes, category, name, price, img_small_url, img_orginal_url):
    global products_category_tab, product_id, CATEGORY_ID_MAP

    category_id = CATEGORY_ID_MAP.get(category, "0")

    mode = 'a' if category in products_category_tab else 'w'
    file_exists = category in products_category_tab

    price = price.replace("zł", "").replace(",", ".").strip()

    def format_features(attributes):
        # Spłaszczenie listy słowników do jednego słownika
        flattened_attributes = {}
        for item in attributes:
            flattened_attributes.update(item)

        # Formatuj cechy w formacie wymaganym przez PrestaShop
        formatted_features = []
        position = 1
        for key, value in flattened_attributes.items():
            formatted_features.append(f"{key}:{value}:{position}")
            position += 1

        return ",".join(formatted_features)

    features = format_features(attributes)

    prestashop_columns = [
        "Product ID", "Active (0/1)", "Name *", "Categories (x,y,z...)", "Price tax excluded",
        "Quantity", "Minimal quantity", "Low stock level", "Send me an email when the quantity is under this level",
        "Available for order (0 = No, 1 = Yes)", "Condition", "Show price (0 = No, 1 = Yes)",
        "Image URLs (x,y,z...)", "Reference #"
    ]

    image_url = f"/var/www/html/img/{clean_string(name)}_original.jpg"

    prestashop_data = {
        "Product ID": product_id,  # ID produktu
        "Active (0/1)": 1,  # Produkt aktywny
        "Name *": name,  # Nazwa produktu
        "Categories (x,y,z...)": category_id,  # ID lub nazwa kategorii
        "Price tax excluded": price,  # Cena netto
        "Quantity": 10,  # Ilość dostępnych sztuk
        "Minimal quantity": 1,  # Minimalna ilość zamówienia
        "Low stock level": 0,  # Niski poziom produktów w magazynie
        "Send me an email when the quantity is under this level": 0,  # Powiadomienia e-mail
        "Available for order (0 = No, 1 = Yes)": 1,  # Produkt dostępny do zamówienia
        "Condition": "new",  # Stan produktu (nowy)
        "Show price (0 = No, 1 = Yes)": 1,  # Wyświetlanie ceny
        "Image URLs (x,y,z...)": image_url,  # URL zdjęcia
        "Reference #": f"REF{product_id:03}"  # Unikalny numer referencyjny
    }

    product_id = product_id + 1

    save_img(img_small_url, img_orginal_url, category, name)

    current_directory = os.path.dirname(os.path.abspath(__file__))
    folder_path = os.path.join(current_directory, data_folder_name)


    file_name = f'{category}.csv'
    file_path = os.path.join(folder_path, file_name)
    with open(file_path, mode=mode, newline='', encoding='utf-8') as file:
        writer = csv.writer(file)

        if not file_exists:
            writer.writerow(prestashop_columns)  # Nagłówki z kluczy słownika
            products_category_tab.append(category)
        writer.writerow([prestashop_data.get(col, "") for col in prestashop_columns])  # Wartości wiersza


    general_file_name = 'all_products.csv'
    general_file_path = os.path.join(folder_path, general_file_name)
    general_file_exists = os.path.exists(general_file_path)
    with open(general_file_path, mode='a', newline='', encoding='utf-8') as general_file:
        writer = csv.writer(general_file)

        if not general_file_exists:
            writer.writerow(prestashop_columns)
        writer.writerow([prestashop_data.get(col, "") for col in prestashop_columns])


def save_img(img_small, img_original, category, name):

    category_folder = os.path.join(images_folder_name, category)

    if not os.path.exists(category_folder):
        os.makedirs(category_folder)


    # Folder ogólny na zdjęcia
    general_folder = os.path.join(images_folder_name, 'all_images')

    if not os.path.exists(general_folder):
        os.makedirs(general_folder)
    def download_and_save_image(img_url, category_filename, general_filename):
        try:
            response = requests.get(img_url)
            response.raise_for_status()

            # Zapis do folderu kategorii
            with open(category_filename, 'wb') as img_file:
                img_file.write(response.content)

            # Zapis do folderu ogólnego
            with open(general_filename, 'wb') as img_file:
                img_file.write(response.content)

            print(f"Pobrano zdjęcie {img_url} i zapisano jako {category_filename} oraz {general_filename}")
        except requests.exceptions.RequestException as e:
            print(f"Nie udało się pobrać zdjęcia {img_url}: exception: {e}")

    if img_small:
        small_file_category = os.path.join(category_folder, f"{clean_string(name)}_small.jpg")
        small_file_general = os.path.join(general_folder, f"{clean_string(name)}_small.jpg")
        img_small = img_small[0]
        download_and_save_image(img_small, small_file_category, small_file_general)
        download_and_save_image(img_original, small_file_category, small_file_general)

    if img_original:
        original_file_category = os.path.join(category_folder, f"{clean_string(name)}_original.jpg")
        original_file_general = os.path.join(general_folder, f"{clean_string(name)}_original.jpg")
        download_and_save_image(img_small, original_file_category, original_file_general)
        download_and_save_image(img_original, original_file_category, original_file_general)
