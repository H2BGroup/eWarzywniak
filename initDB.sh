#!/bin/bash

HOST="db"
USER="root"
PASSWORD="student"
DATABASE_NAME="BE_188679"
SQL_DUMP_FILE="db.sql"

mysql -h "$HOST" -P 3306 -u "$USER" -p"$PASSWORD" -e "CREATE DATABASE IF NOT EXISTS ${DATABASE_NAME}";
mysql -h "$HOST" -P 3306 -u "$USER" -p"$PASSWORD" "$DATABASE_NAME" < "$SQL_DUMP_FILE"
exec apache2-foreground