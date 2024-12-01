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

### Uruchom kontenery  
~~~
docker-compose up
~~~
### Konfiguracja po instalacji  
Po zakończonej instalacji kontenerów uruchom skrypt, aby zakończyć konfigurację:
~~~
docker exec -it prestashop /bin/bash -c "/var/www/html/conf/post_install.sh"
~~~
### Wczytaj backup
Przejdź do folderu `scripts` i uruchom skrypt
~~~
./restore_backup.sh
~~~
### Strona jest dostępna pod adresem  
https://localhost/
## Panel administracyjny i phpMyAdmin

Panel administracyjny dostępny pod adresem:  
[https://localhost/admin123/](https://localhost/admin123/)  

phpMyAdmin dostępny pod adresem:  
[http://localhost:8001/](http://localhost:8001/)

### Dane logowania

| Usługa               | Login                              | Hasło       |
|----------------------|------------------------------------|-------------|
| Panel administracyjny | wloczkowyswiat.prestashop@gmail.com | prestashop |
| phpMyAdmin           | root                              | prestashop  |
## Tworzenie backupu

Aby utworzyć backup, przejdź do folderu `scripts` i uruchom skrypt:
~~~
./create_backup.sh
~~~

**Uwaga:** Uruchomienie tego skryptu nadpisze poprzedni zapisany backup.



