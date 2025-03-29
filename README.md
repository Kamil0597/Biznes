# Sklep internetowy
## Opis projektu
Projekt polegał na stworzeniu **kopii istniejącego sklepu internetowego** z wykorzystaniem **PrestaShop 1.7.8**.

Projekt pochodzi z szerszego repozytorium [Repozytorium źródłowe](https://github.com/Kamil0597/Biznes.git), a tutaj zawarte są jedynie moduły, za które byłem odpowiedzialny.

## Oryginalna strona
Strona źródłowa - https://wloczkowyswiat.pl/  
Do klonowania strony wykorzystano **PrestaShop 1.7.8.11**  
Środowisko uruchomieniowe zostało opracowane z wykorzystaniem zestawu  
skonteneryzowanych usług zarządzanych za pomocą rozwiązania **Docker** i **docker-compose**.
- **Docker 26.1.3**
- **docker-compose 1.29.2**

## Podgląd sklepu

<h2 align="center">Strona główna</h2>

![shopPreview](https://github.com/user-attachments/assets/de848702-6585-4723-bb05-a08212590bd5)

<h2 align="center">Panel administracyjny</h2>

![shopPreview2](https://github.com/user-attachments/assets/4e501c5a-256c-4a4a-8172-71d5be294216)

<h2 align="center">Baza danych sklepu</h2>

![shopPreview3](https://github.com/user-attachments/assets/a452cf59-ba1e-4d0e-919d-43ab92b1e22b)


## Instalacja

### Sklonuj repozytorium  
~~~
git clone https://github.com/Lewap333/Sklep-internetowy.git
~~~
### 

## Uruchomienie wersji DEV

Poniższe kroki pozwolą na poprawne uruchomienie sklepu w środowisku deweloperskim:

1. **Przejdź do folderu z plikami wersji DEV**  
   Upewnij się, że jesteś w folderze, w którym znajdują się pliki wersji deweloperskiej:
   ```bash
   cd DEV
2. **Ustaw uprawnienia dla plików sklepu**
    ```bash
   chmod -R 755 prestashop_files/
3. **Build**
  Przejdź do folderu `DEV/configurations` 
  Uruchom skrypt build.sh
    ~~~
    sudo ./build.sh
    ~~~
### Zapisywanie zmian
Po wprowadzeniu zmian w sklepie przed wyłączeniem kontenerów zapisz w folderze `DEV/configurations` aktualny dump bazy.  
~~~
sudo docker exec admin-mysql_db mariadb-dump -uroot -pstudent BE_184429 > dump.sql
~~~

### Utworzenie nowego obrazu sklepu z wykorzystaniem Dockerfile
Przejdź do folderu **`DEV`** zawierającego plik Dockerfile
Utworzenie obrazu 
~~~
docker build -t <image_name>:<image_tag> .
~~~

### Wersja PROD

W tej konfiguracji sklep został wdrożony na uczelniany klaster, korzystając z **zewnętrznej usługi MySQL** (dostarczanej przez klaster). 
Aby uruchomić środowisko produkcyjne lokalnie, wykonaj następujące kroki:

1. **Przejdź do folderu `REMOTEDB` i uruchom skrypt build.sh**  
   Skrypt `build.sh` utworzy lokalnie zewnętrzna bazę danych:
   ```bash
   cd REMOTEDB
   sudo ./build.sh
2. **Przejdź do folderu `PROD` i uruchom skrypt build.sh**
   ```bash
   cd PROD
   sudo ./build.sh
### Zatrzymanie i usunięcie kontenerów
Przejdź do folderu zawierającego plik docker-compose.yaml
~~~
  sudo docker-compose down
~~~

### Strona główna sklepu
https://localhost:18442/pl/
### Panel administracyjny
[https://localhost:18442/admin-dev/](https://localhost:18442/admin-dev/)  
### phpMyAdmin
[http://localhost:8081/](http://localhost:8081/)

### Dane logowania

| Usługa               | Login                              | Hasło       |
|----------------------|------------------------------------|-------------|
| Panel administracyjny | wloczkowyswiat.prestashop@gmail.com | prestashop |
| phpMyAdmin           | root                              | student  |



