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


    def save():
        # Parsowanie zawartości strony za każdym razem, gdy jest ona aktualizowana
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

                # Pobieranie URL obrazu
                img_tag = product.find('img')
                img_url = img_tag.get('data-src') or img_tag.get('src')
                if img_url and not img_url.startswith('http'):
                    img_url = 'https://wloczkowyswiat.pl' + img_url

                if nazwa == '':
                    continue
                else:
                    # Zapisywanie danych w CSV
                    writer.writerow([kategoria, nazwa, cena, img_url])

                # Pobieranie obrazu
                if img_url:
                    img_data = requests.get(img_url).content
                    img_filename = os.path.join('pobraneWloczki', f"{nazwa.replace(' ', '_')}.jpg")
                    with open(img_filename, 'wb') as img_file:
                        img_file.write(img_data)

                    print(f'Pobrano produkt: {nazwa} - {img_url}')

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