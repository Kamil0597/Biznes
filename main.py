import os
import csv
import requests
from selenium import webdriver
from selenium.common import NoSuchElementException
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup
import time

# Inicjalizacja przeglądarki
driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

# URL strony
url = 'https://wloczkowyswiat.pl/wloczki'
driver.get(url)

# Czekamy na pełne załadowanie strony
time.sleep(5)

# Tworzenie katalogu na obrazy, jeśli nie istnieje
if not os.path.exists('pobraneWloczki'):
    os.makedirs('pobraneWloczki')

# Tworzenie pliku CSV do zapisania danych produktów
with open('pobraneWloczki/dane_produkty.csv', mode='w', newline='', encoding='utf-8') as file:
    writer = csv.writer(file)
    writer.writerow(['Kategoria', 'Nazwa', 'Cena', 'URL Obrazu'])


    # def generate_csv_for_categories_and_subcategories():
    #     with open('categories.csv', mode='w', newline='', encoding='utf-8') as category_file, \
    #             open('subcategories.csv', mode='w', newline='', encoding='utf-8') as subcategory_file:
    #
    #         category_writer = csv.writer(category_file)
    #         subcategory_writer = csv.writer(subcategory_file)
    #
    #         category_writer.writerow(['Category ID', 'Category Name', 'Category URL'])
    #         subcategory_writer.writerow(['Main Category ID', 'Subcategory ID', 'Subcategory Name', 'Subcategory URL'])
    #
    #         # Szukanie głównych kategorii
    #         categories = driver.find_elements("xpath", "//ul[@class='standard']/li")
    #         for category in categories:
    #             try:
    #                 # Pobieranie informacji o kategorii
    #                 category_id = category.get_attribute("id")
    #                 category_name = category.text.strip()
    #                 category_link = category.find_element("tag name", "a")  # Pobieramy element linku
    #
    #                 if category_link:
    #                     category_url = category_link.get_attribute("href")
    #                 else:
    #                     print(f'Pominięto kategorię {category_id} z powodu braku URL')
    #                     continue
    #
    #                 # Zapis do CSV kategorii
    #                 category_writer.writerow([category_id, category_name, category_url])
    #                 print(f'Przetworzono kategorię: {category_name}, ID: {category_id}, URL: {category_url}')
    #
    #                 # Otwieranie nowego linku kategorii
    #                 driver.get(category_url)
    #                 time.sleep(2)  # Czekamy na załadowanie podkategorii
    #
    #                 # Szukanie podkategorii
    #                 subcategories = driver.find_elements("xpath", "//ul[@class='subcategories']/li")
    #                 for subcategory in subcategories:
    #                     try:
    #                         # Pobieranie informacji o podkategorii
    #                         subcategory_id = subcategory.get_attribute("id")
    #                         subcategory_name = subcategory.text.strip()
    #                         subcategory_link = subcategory.find_element("tag name", "a")
    #
    #                         if subcategory_link:
    #                             subcategory_url = subcategory_link.get_attribute("href")
    #                         else:
    #                             print(f'Pominięto podkategorię {subcategory_id} z powodu braku URL')
    #                             continue
    #
    #                         # Zapis do CSV podkategorii
    #                         subcategory_writer.writerow(
    #                             [category_id, subcategory_id, subcategory_name, subcategory_url])
    #                         print(
    #                             f'Przetworzono podkategorię: {subcategory_name}, ID: {subcategory_id}, URL: {subcategory_url}')
    #
    #                     except NoSuchElementException:
    #                         print(f'Nie udało się pobrać danych dla podkategorii w kategorii {category_id}')
    #
    #                 # Powrót do głównej strony kategorii
    #                 driver.get(url)
    #                 time.sleep(2)  # Czekamy na załadowanie strony głównej
    #
    #             except NoSuchElementException as e:
    #                 print(
    #                     f'Nie udało się pobrać danych dla kategorii {category.get_attribute("id") if category else "Brak ID"}: {e}')


    def save():
        page_source = driver.page_source
        soup = BeautifulSoup(page_source, 'html.parser')

        for product in soup.find_all('div', class_='product'):
            try:
                # Pobieranie kategorii
                kategoria = product.get('data-category', '').strip()

                # Pobieranie nazwy
                nazwa_tag = product.find('a', class_='prodname')
                nazwa = nazwa_tag.get('title', '').strip() if nazwa_tag else ''

                # Pobieranie ceny
                cena_tag = product.find('div', class_='price f-row')
                cena = cena_tag.find('em').text.strip() if cena_tag else ''

                # Pobieranie pełnowymiarowych URL-i obrazów
                img_tags = product.find_all('img', limit=2)  # Znajdujemy dwa pierwsze obrazy
                img_urls = []
                for img_tag in img_tags:
                    img_url = img_tag.get('data-src') or img_tag.get('src')
                    if img_url and not img_url.startswith('http'):
                        img_url = 'https://wloczkowyswiat.pl' + img_url
                    img_urls.append(img_url)

                # Sprawdzanie, czy mamy co najmniej dwa URL-e
                if len(img_urls) < 2:
                    print(f"Pominięto produkt {nazwa} - za mało obrazów o wysokiej rozdzielczości")
                    continue

                # Zapisywanie danych w CSV
                writer.writerow([kategoria, nazwa, cena, img_urls[0], img_urls[1]])

                # Pobieranie dwóch obrazów pełnowymiarowych
                for idx, img_url in enumerate(img_urls[:2]):
                    if img_url:
                        img_data = requests.get(img_url).content
                        img_filename = os.path.join('pobraneWloczki', f"{nazwa.replace(' ', '_')}_img{idx + 1}.jpg")
                        with open(img_filename, 'wb') as img_file:
                            img_file.write(img_data)
                        print(f'Pobrano obraz: {img_filename}')

            except Exception as e:
                print(f'Nie udało się pobrać danych dla produktu: {e}')


    # Wywołanie funkcji `save()` dla pierwszej strony
    save()

    # Przełączanie na kolejne strony i zapisywanie danych
    while True:
        try:
            # Znajdowanie przycisku "Następna strona" i pobranie linku
            next_button = driver.find_element("xpath", "//li[@class='last']/a")
            next_page_url = next_button.get_attribute("href")

            # Jeśli link nie istnieje, kończymy pętlę
            if not next_page_url:
                print("Osiągnięto ostatnią stronę. Scraper zakończył działanie.")
                break

            # Wypisanie przejścia na kolejną stronę
            print(f"Przechodzenie na następną stronę: {next_page_url}")

            # Przechodzenie na nową stronę
            driver.get(next_page_url)
            time.sleep(5)  # Czekamy na załadowanie nowej strony

            # Zapisanie danych z kolejnej strony
            save()

        except NoSuchElementException:
            print("Nie znaleziono przycisku 'Następna strona'. Scraper zakończył działanie.")
            break

driver.quit()