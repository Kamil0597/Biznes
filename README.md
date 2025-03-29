# Projekt z biznesu elektronicznego
## Oryginalna strona
https://wloczkowyswiat.pl/  
Do klonowania strony wykorzystano **PrestaShop 1.7.8.11**  
Środowisko uruchomieniowe zostało opracowane z wykorzystaniem zestawu  
skonteneryzowanych usług zarządzanych za pomocą rozwiązania **Docker** i **docker-compose**.
## Członokwie zespołu 
- Kamil Lasecki
- Jan Kalwasiński
- Paweł Kusznierczuk
- Jakub Kinder
## Sposób uruchomienia
### Sklonuj repozytorium  
~~~
git clone https://github.com/Kamil0597/Biznes.git
~~~
### 

### Wersja DEV
#### Uruchomienie
Przejdź do folderu DEV/configurations  
Uruchom skrypt build.sh  
Po uruchomieniu się kontenerów uruchom odpowiednie komendy z pliku commands.txt
#### Zapisanie zmian
Po wprowadzeniu zmian w sklepie przed wyłączeniem kontenerów utwórz aktualny dump bazy.  
Komenda na utworzenie dump.sql znajduje się w pliku commands.txt
#### Utworzenie obrazu z Dockerfile
Przejdź do folderu DEV  
Utwórz obraz  
~~~
docker build -t <image_name>:<image_tag> .
~~~

### Strona jest dostępna pod adresem  
https://localhost:18442
## Panel administracyjny i phpMyAdmin

Panel administracyjny dostępny pod adresem:  
[https://localhost:18442/](https://localhost:18442/admin-dev/)  

phpMyAdmin dostępny pod adresem:  
[http://localhost:8081/](http://localhost:8081/)

### Dane logowania

| Usługa               | Login                              | Hasło       |
|----------------------|------------------------------------|-------------|
| Panel administracyjny | wloczkowyswiat.prestashop@gmail.com | prestashop |
| phpMyAdmin           | root                              | student  |



