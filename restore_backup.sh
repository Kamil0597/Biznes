#!/bin/bash

# Define variables for MySQL and PrestaShop containers, database credentials, and backup paths
MYSQL_CONTAINER="mysql-db"
PRESTASHOP_CONTAINER="prestashop"
DATABASE_NAME="prestashop"
MYSQL_USER="root"
MYSQL_PASSWORD="prestashop"
DUMP_FILE="prestashop_dump.sql"
IMAGE_BACKUP_DIR="prestashop_images"

# Restore the SQL dump
echo "Restoring SQL dump to database '$DATABASE_NAME'..."
docker exec -i $MYSQL_CONTAINER mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $DATABASE_NAME < $DUMP_FILE

# Check if the dump was restored successfully
if [ $? -eq 0 ]; then
    echo "SQL dump restored successfully."
else
    echo "Failed to restore SQL dump."
    exit 1
fi

# Copy the images into the PrestaShop container
echo "Importing pictures..."
docker cp $IMAGE_BACKUP_DIR/p $PRESTASHOP_CONTAINER:/var/www/html/img/
echo "Pictures imported successfully!"
