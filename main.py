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


# Inicjalizacja przeglądarki
driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

# URL strony
url = 'https://wloczkowyswiat.pl/wloczki'
driver.get(url)

WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'prodname')))

generate_csv_for_categories_and_subcategories(driver)
driver.get(url)
tmp(driver)

# Przełączanie na kolejne strony i zapisywanie danych
while True:
    try:

        # Znajdowanie przycisku "Następna strona" i pobranie linku
        next_button = WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.XPATH, "//li[@class='last']/a"))
        )
        next_page_url = next_button.get_attribute("href")

        # Jeśli link nie istnieje, kończymy pętlę
        if not next_page_url:
            print("Osiągnięto ostatnią stronę. Scraper zakończył działanie.")
            break

        # Wypisanie przejścia na kolejną stronę
        print(f"Przechodzenie na następną stronę: {next_page_url}")

        # Przechodzenie na nową stronę
        driver.get(next_page_url)
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'prodname')))  # Czekamy na załadowanie nowej strony

        # Zapisanie danych z kolejnej strony
        tmp(driver)

    except NoSuchElementException:
        print("Nie znaleziono przycisku 'Następna strona'. Scraper zakończył działanie.")
        break

driver.quit()