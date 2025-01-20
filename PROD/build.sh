#!/bin/bash
docker stack deploy -c docker-compose.yaml BE_184429 --with-registry-auth

echo "Running SQL dump..."
docker exec -i $(docker ps --filter "name=admin-mysql_db" -q)  mysql -uroot -pstudent BE_184429 < dump.sql

echo "Shop db loaded!"