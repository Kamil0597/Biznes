#!/bin/bash

# Define variables for MySQL and PrestaShop containers, database credentials, and backup paths
MYSQL_CONTAINER="mysql-db"
PRESTASHOP_CONTAINER="prestashop"
DATABASE_NAME="prestashop"
MYSQL_USER="root"
MYSQL_PASSWORD="prestashop"
DUMP_FILE="../PrestaShop/prestashop_dump.sql"
BACKUP_DIR="../PrestaShop/html"

# List of specific folders to back up
FOLDERS_TO_BACKUP=("img" "mails" "themes" "config" "upload")

# Restore the SQL dump
echo "Restoring SQL dump to database '$DATABASE_NAME'..."
docker exec -i $MYSQL_CONTAINER mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $DATABASE_NAME < $DUMP_FILE

if [ $? -eq 0 ]; then
    echo "SQL dump restored successfully."
else
    echo "Failed to restore SQL dump."
    exit 1
fi

# Replace specific folders in the PrestaShop container
for folder in "${FOLDERS_TO_BACKUP[@]}"; do
    echo "Restoring folder: $folder..."
    docker exec -i $PRESTASHOP_CONTAINER rm -rf /var/www/html/$folder
    docker cp $BACKUP_DIR/$folder $PRESTASHOP_CONTAINER:/var/www/html/

    if [ $? -eq 0 ]; then
        echo "Folder '$folder' restored successfully."
    else
        echo "Failed to restore folder '$folder'."
        exit 1
    fi
done

echo "Restoration completed successfully: Database and selected folders have been restored."
