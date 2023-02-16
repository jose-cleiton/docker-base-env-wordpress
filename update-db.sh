#!/bin/bash
source /docker/.env
pv bd/dev.sql.gz | gunzip | docker exec -i docker_mysql_1 mysql -u $MYSQL_USER --password=$MYSQL_PASSWORD $MYSQL_DATABASE
