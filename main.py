from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait

from functions import *
import os
import csv
import requests
from selenium import webdriver
from selenium.common import NoSuchElementException
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.support import expected_conditions as EC
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup
import time
SET_PROD_NUM = 1000
CATEGORY_ID_MAP = {}
WLOCZKI_REPEATS = 30
SZNURKI_REPEATS = 15
SZYDELKA_REPEATS = 4
ZROBTOSAM_REPEATS = 4
MAX_REPEATS = 0
count_prod = 0

# URL strony
URLS = [
    'https://wloczkowyswiat.pl/wloczki',
    'https://wloczkowyswiat.pl/sznurki',
    'https://wloczkowyswiat.pl/szydelka',
    'https://wloczkowyswiat.pl/Zrob-to-sam'
]

driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

make_dirs()
driver.get(URLS[0])
# Generowanie kategorii i ładowanie mapowania
#generate_csv_for_categories_and_subcategories(driver)
categories_csv_path = 'scrapped_data/categories.csv'
CATEGORY_ID_MAP = load_category_mapping(categories_csv_path)
initialize_category_map(CATEGORY_ID_MAP)

# Przechodzenie przez listę URL-i
for url in URLS:
    print(f"Rozpoczęcie scrapowania dla URL: {url}")
    driver.get(url)

    # Czekamy na załadowanie strony
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'prodname')))
    tmp(driver)  # Wywołanie funkcji zapisującej dane dla bieżącej strony

    if url == URLS[0]:
        MAX_REPEATS = WLOCZKI_REPEATS
    elif url == URLS[1]:
        MAX_REPEATS = SZNURKI_REPEATS
    elif url == URLS[2]:
        MAX_REPEATS = SZYDELKA_REPEATS
    elif url == URLS[3]:
        MAX_REPEATS = ZROBTOSAM_REPEATS
    for i in range(MAX_REPEATS):
        try:
            # Znajdowanie przycisku "Następna strona" i pobranie linku
            next_button = WebDriverWait(driver, 10).until(
                EC.presence_of_element_located((By.XPATH, "//li[@class='last']/a"))
            )
            next_page_url = next_button.get_attribute("href")

            # Jeśli link nie istnieje, kończymy pętlę
            if not next_page_url:
                print("Osiągnięto ostatnią stronę. Przechodzę do kolejnego URL.")
                break

            # Wypisanie przejścia na kolejną stronę
            print(f"Przechodzenie na następną stronę: {next_page_url}")

            # Przechodzenie na nową stronę
            driver.get(next_page_url)
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'prodname')))

            # Zapisanie danych z nowej strony
            tmp(driver)

        except NoSuchElementException:
            print("Nie znaleziono przycisku 'Następna strona'. Przechodzę do kolejnego URL.")
            break

print("Scraper zakończył działanie dla wszystkich URL-i.")
driver.quit()