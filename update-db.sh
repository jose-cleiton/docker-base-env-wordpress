#!/bin/bash
source /home/jose/dev/docker-base-env-wordpress/docker/.env
pv bd/dev.sql.gz | gunzip | docker exec -i docker_mysql_1 mysql -u $MYSQL_USER --password=$MYSQL_PASSWORD $MYSQL_DATABASE
