#!/bin/bash
docker-compose up -d

echo "Waiting for MySQL container to be ready..."
until docker exec admin-mysql_db mariadb -uroot -pstudent --silent -e "SELECT 1"; do
  echo "Waiting for MySQL to be ready..."
  sleep 5
done

echo "Running SQL dump..."
docker exec -i admin-mysql_db mariadb -uroot -pstudent BE_184429 < dump.sql

echo "Dump restore finished."
