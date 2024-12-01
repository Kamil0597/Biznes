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
FOLDERS_TO_BACKUP=("img" "themes" "mails" "config" "upload" "modules/ps_cashondelivery")

# Create the backup directory if it doesn't exist
mkdir -p $BACKUP_DIR

# Create a SQL dump
echo "Creating SQL dump for database '$DATABASE_NAME'..."
docker exec -i $MYSQL_CONTAINER mysqldump -u $MYSQL_USER -p$MYSQL_PASSWORD $DATABASE_NAME > $DUMP_FILE

# Check if the dump was created successfully
if [ $? -eq 0 ]; then
    echo "SQL dump created successfully as '$DUMP_FILE'."
else
    echo "Failed to create SQL dump."
    exit 1
fi

# Backup each specified folder
for folder in "${FOLDERS_TO_BACKUP[@]}"; do
    echo "Backing up folder: $folder..."
    docker cp $PRESTASHOP_CONTAINER:/var/www/html/$folder $BACKUP_DIR/

    # Check if the folder was copied successfully
    if [ $? -eq 0 ]; then
        echo "Folder '$folder' backed up successfully."
    else
        echo "Failed to back up folder '$folder'."
        exit 1
    fi
done

echo "Backup completed successfully: Database dump is in '$DUMP_FILE' and selected folders are in '$BACKUP_DIR'."
