#!/usr/bin/env bash

password=secretpassword


tables=( $(mariadb -u wordpress -p$password wordpress -e "SHOW TABLES;" | grep -v "Tables_in") )

rm -rf dumps
mkdir dumps

for table in "${tables[@]}"
do
    mariadb-dump --skip-comments -u wordpress -p$password wordpress $table > dumps/${table}_dump.sql
done
