import os
import csv
import time

import requests
from selenium import webdriver
from selenium.common import NoSuchElementException
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup

from config import products_category_tab

def tmp(driver):

    tmp = 0

    page_source = driver.page_source
    soup = BeautifulSoup(page_source, 'html.parser')

    for product in soup.find_all('div', {'data-product-id': True}):
        try:
            # Pobieranie kategorii
            category = product.get('data-category', '').strip()

            # Pobieranie nazwy i linku do produktu
            name_tag = product.find('a', class_='prodname')
            name = name_tag.get('title', '').strip() if name_tag else ''
            product_url = name_tag['href'] if name_tag else ''

            # Pobieranie zdjęć i ceny za pomocą get_image_and_price
            img_url, price = get_image_and_price(product)
            if img_url is None:  # Pomijamy produkt, jeśli brakuje obrazów
                continue

            # Otwieranie strony produktu i pobieranie szczegółowych danych
            if product_url:
                product_url = 'https://wloczkowyswiat.pl' + product_url if not product_url.startswith('http') else product_url
                attributes = open_product_and_get_data(product_url, driver)
                save(attributes, category, name, price, img_url)
            else:
                attributes = {}
                print(tmp)
                tmp = tmp + 1


        except Exception as e:
            print(f'Nie udało się pobrać danych dla produktu: {e}')

def get_image_and_price(product):
    img_urls = []
    try:
        # Pobieranie pełnowymiarowych URL-i obrazów
        img_tags = product.find_all('img', limit=2)  # Znajdujemy dwa pierwsze obrazy
        for img_tag in img_tags:
            img_url = img_tag.get('data-src') or img_tag.get('src')
            if img_url and not img_url.startswith('http'):
                img_url = 'https://wloczkowyswiat.pl' + img_url
            img_urls.append(img_url)

        # Pobieranie ceny
        cena_tag = product.find('div', class_='price f-row')
        price = cena_tag.find('em').text.strip() if cena_tag else ''
        return img_urls, price

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

    return attributes

def open_product_and_get_data(product_url, driver):
    # Otwieramy stronę produktu w nowym oknie
    driver.execute_script("window.open(arguments[0]);", product_url)
    driver.switch_to.window(driver.window_handles[1])  # Przełączamy się na nowe okno
    time.sleep(2)  # Czekamy na załadowanie strony produktu

    # Pobieranie atrybutów produktu
    attributes = get_product_attributes(driver)

    # Zamknięcie okna i powrót do głównej strony kategorii
    driver.close()
    driver.switch_to.window(driver.window_handles[0])  # Przełączamy się na główne okno
    time.sleep(1)  # Opcjonalnie czekamy chwilę przed kolejną iteracją

    return attributes

def save(attributes, category, name, price, img_url):
    global products_category_tab

    # Tryb 'a' jeśli plik już istnieje, 'w' jeśli tworzymy nowy
    mode = 'a' if category in products_category_tab else 'w'
    file_exists = category in products_category_tab

    # Spłaszczanie listy słowników do jednego słownika
    flattened_attributes = {}
    for attr in attributes:
        flattened_attributes.update(attr)

    flattened_attributes = {'Nazwa': name, 'Cena': price, 'Linki do zdjęć': ', '.join(img_url), **flattened_attributes}

    save_img(img_url, category, name)

    with open(f'{category}.csv', mode=mode, newline='', encoding='utf-8') as file:
        writer = csv.writer(file)

        if not file_exists:
            writer.writerow(flattened_attributes.keys())  # Nagłówki z kluczy słownika
            products_category_tab.append(category)

        writer.writerow(flattened_attributes.values())  # Wartości wiersza


def save_img(img_urls, category, name):
    # Upewnienie się, że img_urls jest listą URL-i
    if not isinstance(img_urls, list):
        img_urls = [img_urls]

    # Utworzenie katalogu dla danej kategorii, jeśli nie istnieje
    if not os.path.exists(category):
        os.makedirs(category)

    # Pobieranie i zapisywanie każdego zdjęcia z listy URL-i
    for idx, img_url in enumerate(img_urls):
        try:
            response = requests.get(img_url)
            response.raise_for_status()  # Sprawdzenie, czy pobieranie się powiodło

            # Zapis zdjęcia z unikalną nazwą, aby uniknąć nadpisywania
            img_filename = os.path.join(category, f"{name}_img_{idx + 1}.jpg")
            with open(img_filename, 'wb') as img_file:
                img_file.write(response.content)

            print(f"Pobrano zdjęcie {img_url} dla produktu {name}")

        except requests.exceptions.RequestException as e:
            print(f"Nie udało się pobrać zdjęcia {img_url}: {e}")