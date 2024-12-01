import os
import csv
import time
from telnetlib import EC

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


def make_dirs():

    directories = [folder_name, images_folder_name, data_folder_name]

    # Tworzenie folderów, jeśli nie istnieją
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
    # Otwieramy stronę produktu w nowym oknie
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
        # Zamknięcie okna i powrót do głównej strony kategorii
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
        index = 10  # Początkowy ID kategorii

        for category in categories:
            try:
                link_element = category.find_element("tag name", "a")
                name = link_element.text
                category_url = link_element.get_attribute("href")
                category_list.append((index, name, category_url))

                # Zapisz główną kategorię
                category_writer.writerow([
                    index, 1, name, '', 1, '',
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

def save(attributes, category, name, price, img_small_url, img_orginal_url):
    global products_category_tab


    mode = 'a' if category in products_category_tab else 'w'
    file_exists = category in products_category_tab

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
        "Tax rules ID", "Wholesale price", "On sale (0/1)", "Discount amount", "Discount percent",
        "Discount from (yyyy-mm-dd)", "Discount to (yyyy-mm-dd)", "Reference #", "Supplier reference #",
        "Supplier", "Manufacturer", "EAN13", "UPC", "Ecotax", "Width", "Height", "Depth", "Weight",
        "Delivery time of in-stock products", "Delivery time of out-of-stock products with allowed orders",
        "Quantity", "Minimal quantity", "Low stock level", "Send me an email when the quantity is under this level",
        "Visibility", "Additional shipping cost", "Unity", "Unit price", "Summary", "Description",
        "Tags (x,y,z...)", "Meta title", "Meta keywords", "Meta description", "URL rewritten", "Text when in stock",
        "Text when backorder allowed", "Available for order (0 = No, 1 = Yes)", "Product available date",
        "Product creation date", "Show price (0 = No, 1 = Yes)", "Image URLs (x,y,z...)", "Image alt texts (x,y,z...)",
        "Delete existing images (0 = No, 1 = Yes)", "Feature(Name:Value:Position)",
        "Available online only (0 = No, 1 = Yes)",
        "Condition", "Customizable (0 = No, 1 = Yes)", "Uploadable files (0 = No, 1 = Yes)",
        "Text fields (0 = No, 1 = Yes)",
        "Out of stock action", "Virtual product", "File URL", "Number of allowed downloads", "Expiration date",
        "Number of days", "ID / Name of shop", "Advanced stock management", "Depends On Stock", "Warehouse",
        "Accessories (x,y,z...)"
    ]
    global product_id
    price = price.replace(",", ".")
    reference = f"REF-{uuid.uuid4().hex[:8]}"
    prestashop_data = {
        "ID": product_id,  # Opcjonalnie, jeśli dodajesz nowy produkt, może być puste
        "Active (0/1)": 1,  # Produkt aktywny
        "Name *": name,  # Nazwa produktu
        "Categories (x,y,z...)": category,  # ID lub nazwa kategorii
        "Price tax excluded": price.replace("zł", "").replace(",", ".").strip(),  # Cena netto
        "Price tax included": "",  # Cena brutto (opcjonalnie, zostanie obliczona na podstawie podatku)
        "Tax rules ID": "",  # ID reguły podatku
        "Wholesale price": "",  # Koszt własny (opcjonalnie)
        "On sale (0/1)": 0,  # Produkt nie jest w promocji
        "Discount amount": "",  # Wartość rabatu
        "Discount percent": "",  # Procent rabatu
        "Discount from (yyyy-mm-dd)": "",  # Data rozpoczęcia rabatu
        "Discount to (yyyy-mm-dd)": "",  # Data zakończenia rabatu
        "Reference #": "",  # Indeks #
        "Supplier reference #": reference,  # Kod dostawcy
        "Supplier": "",  # Dostawca (opcjonalnie)
        "Manufacturer": "",  # Marka (opcjonalnie)
        "EAN13": "",  # kod EAN13 (opcjonalnie)
        "UPC": "",  # Kod kreskowy UPC
        "MPN": "",  # MPN (opcjonalnie)
        "Ecotax": "",  # Podatek ekologiczny
        "Width": "",  # Szerokość (opcjonalnie)
        "Height": "",  # Wysokość (opcjonalnie)
        "Depth": "",  # Głębokość (opcjonalnie)
        "Weight": "",  # Waga (opcjonalnie)
        "Delivery time of in-stock products": "",  # Czas dostawy dostępnych produktów
        "Delivery time of out-of-stock products with allowed orders": "",  # Czas dostawy wyprzedanych produktów
        "Quantity": 10,  # Ilość dostępnych sztuk
        "Minimal quantity": 1,  # Minimalna ilość zamówienia
        "Low stock level": 0,  # Niski poziom produktów w magazynie
        "Send me an email when the quantity is under this level": 0,  # Powiadomienia e-mail
        "Visibility": "both",  # Widoczność w katalogu i wyszukiwarce
        "Additional shipping cost": "",  # Dodatkowe koszty przesyłki
        "Unity": "",  # Jednostka dla ceny za jednostkę
        "Unit price": "",  # Cena za jednostkę
        "Summary": "",  # Podsumowanie produktu
        "Description": "",  # Opis produktu
        "Tags (x,y,z...)": "",  # Tagi produktu
        "Meta title": name,  # Meta-tytuł (SEO)
        "Meta keywords": "",  # Słowa kluczowe meta (SEO)
        "Meta description": "",  # Opis meta (SEO)
        "URL rewritten": name.lower().replace(" ", "-").replace(",", ""),  # Przepisany URL
        "Text when in stock": "Available",  # Etykieta, gdy produkt jest w magazynie
        "Text when backorder allowed": "Available on backorder",  # Etykieta, gdy zamówienia są dozwolone
        "Available for order (0 = No, 1 = Yes)": 1,  # Produkt dostępny do zamówienia
        "Product available date": "",  # Data dostępności produktu
        "Product creation date": "",  # Data wytworzenia produktu
        "Show price (0 = No, 1 = Yes)": 1,  # Wyświetlanie ceny
        "Image URLs (x,y,z...)": ",".join([img_orginal_url] if img_orginal_url else []),  # URL zdjęć
        "Image alt texts (x,y,z...)": name,  # Alternatywny tekst dla zdjęć
        "Delete existing images (0 = No, 1 = Yes)": 0,  # Nie usuwaj istniejących zdjęć
        "Feature(Name:Value:Position:Custom)": "",  # Cecha produktu (opcjonalnie)
        "Available online only (0 = No, 1 = Yes)": 0,  # Produkt dostępny tylko online
        "Condition": "new",  # Stan produktu (nowy)
        "Customizable (0 = No, 1 = Yes)": 0,  # Produkt nie jest konfigurowalny
        "Uploadable files (0 = No, 1 = Yes)": 0,  # Nie można przesyłać plików
        "Text fields (0 = No, 1 = Yes)": 0,  # Brak pól tekstowych
        "Out of stock action": "default",  # Domyślne zachowanie, gdy produkt jest wyprzedany
        "Virtual product": 0,  # Produkt nie jest wirtualny
        "File URL": "",  # URL pliku (dla produktów wirtualnych)
        "Number of allowed downloads": "",  # Liczba dozwolonych pobrań
        "Expiration date (yyyy-mm-dd)": "",  # Data wygaśnięcia (opcjonalnie)
        "Number of days": "",  # Liczba dni dostępu (opcjonalnie)
        "ID / Name of shop": "",  # ID lub nazwa sklepu (opcjonalnie)
        "Advanced stock management": 0,  # Brak zaawansowanego zarządzania magazynem
        "Depends On Stock": 0,  # Nie zależy od stanu magazynowego
        "Warehouse": "",  # Magazyn (opcjonalnie)
        "Accessories (x,y,z...)": ""  # Akcesoria produktu
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


def save_img(img_small, img_original, category, name):

    category_folder = os.path.join(images_folder_name, category)

    if not os.path.exists(category_folder):
        os.makedirs(category_folder)

    def download_and_save_image(img_url, filename):
        try:
            response = requests.get(img_url)
            response.raise_for_status()

            with open(filename, 'wb') as img_file:
                img_file.write(response.content)

            print(f"Pobrano zdjęcie {img_url} do {filename}")
        except requests.exceptions.RequestException as e:
            print(f"Nie udało się pobrać zdjęcia {img_url}: exeption: {e}")


    if img_small:
        file_name = os.path.join(category_folder, f"{name}_small.jpg")
        img_small = img_small[0]
        download_and_save_image(img_small, file_name)
    if img_original:
        file_name = os.path.join(category_folder, f"{name}_original.jpg")
        download_and_save_image(img_original, file_name)