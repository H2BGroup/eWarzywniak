#!/bin/bash

HOST="db"
USER="root"
PASSWORD="student"
DATABASE_NAME="BE_188679"

if mysql -h "$HOST" -P 3306 -u "$USER" -p"$PASSWORD" -e "use $NAME"; then
    mysql -h "$HOST" -P 3306 -u "$USER" -p"$PASSWORD" -e "DROP DATABASE $DATABASE_NAME";
fi
mysql -h "$HOST" -P 3306 -u "$USER" -p"$PASSWORD" -e "CREATE DATABASE $DATABASE_NAME";
exec apache2-foreground