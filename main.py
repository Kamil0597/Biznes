from functions import *
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





    # Wywołanie funkcji `save()` dla pierwszej strony
tmp(driver)

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
        tmp(driver)

    except NoSuchElementException:
        print("Nie znaleziono przycisku 'Następna strona'. Scraper zakończył działanie.")
        break

driver.quit()