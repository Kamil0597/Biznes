#!/bin/bash

# Define variables for MySQL and PrestaShop containers, database credentials, and backup paths
MYSQL_CONTAINER="mysql-db"
PRESTASHOP_CONTAINER="prestashop"
DATABASE_NAME="prestashop"
MYSQL_USER="root"
MYSQL_PASSWORD="prestashop"
DUMP_FILE="prestashop_dump.sql"
IMAGE_BACKUP_DIR="prestashop_images"

#Create a SQL dump
echo "Creating SQL dump for database '$DATABASE_NAME'..."
docker exec -i $MYSQL_CONTAINER mysqldump -u $MYSQL_USER -p$MYSQL_PASSWORD $DATABASE_NAME > $DUMP_FILE

# Check if the dump was created successfully
if [ $? -eq 0 ]; then
    echo "SQL dump created successfully as '$DUMP_FILE'."
else
    echo "Failed to create SQL dump."
    exit 1
fi

# Create a backup of the images directory
echo "Creating backup of product images from the PrestaShop container..."
docker cp $PRESTASHOP_CONTAINER:/var/www/html/img/p $IMAGE_BACKUP_DIR

# Check if the images were copied successfully
if [ $? -eq 0 ]; then
    echo "Image backup created successfully in '$IMAGE_BACKUP_DIR'."
else
    echo "Failed to create image backup."
    exit 1
fi

echo "Backup completed successfully: Database dump is in '$DUMP_FILE' and images are in '$IMAGE_BACKUP_DIR'."
