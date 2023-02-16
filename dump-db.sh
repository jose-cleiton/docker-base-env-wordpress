#!/bin/bash
source /docker/.env

docker exec -i docker_wordpress_1 mysqldump -h mysql -u $MYSQL_USER -p$MYSQL_PASSWORD --add-drop-table $MYSQL_DATABASE | gzip > "./bd/dev.sql.gz"

