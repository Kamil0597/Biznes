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



generate_csv_for_categories_and_subcategories(driver)
driver.get(url)
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