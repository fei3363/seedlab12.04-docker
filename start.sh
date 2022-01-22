#!/bin/bash

host=$(hostname -I)
domain='www.heartbleedlabelgg.com'
cat /etc/hosts
echo $host $domain
echo $host $domain >> /etc/hosts
cat /etc/hosts
service apache2 restart

docker-compose rm -s -f;
docker-compose up -d --build;