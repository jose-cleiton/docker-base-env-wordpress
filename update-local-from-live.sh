#!/bin/bash
source /home/jose/dev/docker-base-env-wordpress/docker/.env
echo "Generating a production DB dump"
ssh host "mysqldump -h localhost -u $DB_USER -p --add-drop-table $DB_NAME | gzip" > ./bd/prod.sql.gz

echo "GUnzipping"
pv bd/prod.sql.gz | gunzip | docker exec -i docker_mysql_1 mysql -u $MYSQL_USER --password=$MYSQL_PASSWORD $MYSQL_DATABASE


echo "Search and replace"
docker exec -i docker_wordpress_1 wp search-replace $DOMAIN localhost --all-tables