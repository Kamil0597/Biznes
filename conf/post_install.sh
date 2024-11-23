#!/bin/bash
set -e

echo "Running Post-installation script."

mkdir -p /etc/apache2/certs 

openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
  -keyout /etc/apache2/certs/mysite.key \
  -out /etc/apache2/certs/mysite.cert \
  -subj "/C=PL/ST=Pomorskie/L=Gdansk/O=PG/CN=localhost"

echo "Copying config files."
# Copy Apache configuration files
cp /var/www/html/conf/apache2.conf /etc/apache2/apache2.conf
cp /var/www/html/conf/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

# Enable SSL module
a2enmod ssl

# Enable the SSL site configuration
a2ensite default-ssl.conf

# Reload Apache to apply SSL configuration
service apache2 reload

# Restart Apache to apply new configurations
service apache2 restart

echo "Post-installation script completed."