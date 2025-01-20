# Bazowy obraz PrestaShop
FROM prestashop/prestashop:1.7.8

# Kopiowanie plików sklepu
COPY ./prestashop_files /var/www/html

# Ustawianie właściciela i uprawnień
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Kopiowanie certyfikatów SSL i konfiguracji Apache
COPY ./configurations/certs /etc/ssl/certs
COPY ./configurations/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

# Ustawianie odpowiednich uprawnień
RUN chown -R root:root /etc/ssl/certs /etc/apache2/sites-available && \
    chmod 777 /etc/ssl/certs && \
    chmod 777 /etc/apache2/sites-available/default-ssl.conf

# Włączanie modułu SSL oraz konfiguracji w Apache
RUN a2enmod ssl && \
    a2ensite default-ssl.conf

# Usunięcie folderu install (bez tego blokada admin panelu)
RUN rm -rf /var/www/html/install

# Eksponowanie portu 443 dla HTTPS
EXPOSE 443

# Komenda startowa dla Apache
CMD ["apache2-foreground"]
