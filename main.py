import os
import requests
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from bs4 import BeautifulSoup
import time

# Używamy Selenium do załadowania strony
driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

# URL strony, z której chcemy pobrać obrazy
url = 'https://wloczkowyswiat.pl/wloczki'
driver.get(url)

# Czekamy na pełne załadowanie strony
time.sleep(5)

# Przewijamy stronę w dół, aby załadować wszystkie obrazy
driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
time.sleep(5)  # Czekamy chwilę, aż obrazy się załadują po przewinięciu

# Pobranie zawartości strony po załadowaniu
page_source = driver.page_source

# Zamykanie przeglądarki
driver.quit()

# Parsowanie zawartości strony z użyciem BeautifulSoup
soup = BeautifulSoup(page_source, 'html.parser')

# Tworzenie katalogu na pobrane obrazy, jeśli nie istnieje
if not os.path.exists('pobraneWloczki'):
    os.makedirs('pobraneWloczki')

# Szukanie tagów <img> tylko tych, które zawierają produkty, np. po specyficznej klasie CSS
for idx, img_tag in enumerate(soup.find_all('img')):
    # Pobieranie adresu URL obrazu z atrybutu 'data-src', jeśli strona używa lazy loading
    img_url = img_tag.get('data-src') or img_tag.get('src')  # Sprawdzamy oba atrybuty

    # Sprawdzanie, czy URL jest pełnym linkiem i czy nie jest to 1px.gif lub inne nieistotne pliki
    if img_url and '1px.gif' not in img_url and 'facebook' not in img_url:
        if not img_url.startswith('http'):
            img_url = 'https://wloczkowyswiat.pl' + img_url  # Dodanie domeny, aby stworzyć pełny URL

        # Pobieranie obrazu
        try:
            img_data = requests.get(img_url).content

            # Zapisywanie obrazu na dysku w katalogu 'pobraneWloczki'
            img_filename = os.path.join('pobraneWloczki', f'zdjęcie_{idx}.jpg')
            with open(img_filename, 'wb') as img_file:
                img_file.write(img_data)

            print(f'Pobrano obraz: {img_url}')

        except Exception as e:
            print(f'Nie udało się pobrać obrazu: {img_url} - {e}')
    else:
        print(f'Pominięto: {img_url}')