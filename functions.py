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
    with open('categories.csv', mode='w', newline='', encoding='utf-8') as category_file:

        category_writer = csv.writer(category_file)

        category_writer.writerow(['Category Name', 'Category URL'])

        # Szukanie głównych kategorii
        categories = driver.find_elements("xpath", "//ul[@class='standard']/li")
        category_list = []
        for category in categories:
            try:
                link_element = category.find_element("tag name", "a")
                name = link_element.text
                category_url = link_element.get_attribute("href")
                category_list.append((name, category_url))
                category_writer.writerow([name, category_url])

            except NoSuchElementException as e:
                print(
                    f'Nie udało się pobrać danych dla kategorii {category.get_attribute("id") if category else "Brak ID"}: {e}')
        for name, category_url in category_list:
            driver.get(category_url)

            open_subcategories(driver, name)



def open_subcategories(driver, name):
    sanitized_name = name.replace("/", "_").replace("\\", "_")

    elements = driver.find_elements("css selector", "li.current a")
    soup = BeautifulSoup(driver.page_source, 'html.parser')

    if not elements:
        print(f"Element 'li.current a' nie istnieje na stronie dla kategorii: {name}")
        driver.back()
        return
    with open(f'subcategories_of_{sanitized_name}.csv', mode='w', newline='', encoding='utf-8') as file:
        writer = csv.writer(file)
        writer.writerow(['Subcategory Name'])
        category_elements = soup.select("li.current ul li[id^='category_']")

        for element in category_elements:
            category_id = element.get("id")

            try:
                link_element = element.find("a")
                name = link_element.text.strip()
                writer.writerow([name])

            except:
                print("Brak linku w elemencie:", element.get_attribute("id"))
        driver.back()

def save(attributes, category, name, price, img_small_url, img_orginal_url):
    global products_category_tab


    mode = 'a' if category in products_category_tab else 'w'
    file_exists = category in products_category_tab

    flattened_attributes = {}
    for attr in attributes:
        flattened_attributes.update(attr)

    flattened_attributes = {'Nazwa': name, 'Cena': price, 'Linki do miniaturki': ', '.join(img_small_url),'Link do orginalnego zdjęcia': ', '.join(img_orginal_url) ,**flattened_attributes}

    save_img(img_small_url, img_orginal_url, category, name)

    with open(f'{category}.csv', mode=mode, newline='', encoding='utf-8') as file:
        writer = csv.writer(file)

        if not file_exists:
            writer.writerow(flattened_attributes.keys())  # Nagłówki z kluczy słownika
            products_category_tab.append(category)

        writer.writerow(flattened_attributes.values())  # Wartości wiersza


def save_img(img_small, img_original, category, name):

    # Utworzenie katalogu dla danej kategorii, jeśli nie istnieje
    if not os.path.exists(category):
        os.makedirs(category)

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
        file_name = os.path.join(category, f"{name}_small.jpg")
        img_small = img_small[0]
        download_and_save_image(img_small, file_name)
    if img_original:
        file_name = os.path.join(category, f"{name}_original.jpg")
        download_and_save_image(img_original, file_name)