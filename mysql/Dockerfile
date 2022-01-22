FROM mysql:5.6
ARG DEBIAN_FRONTEND=noninteractive

ENV MYSQL_ROOT_PASSWORD=seedubuntu
ENV MYSQL_USER=apache 
ENV MYSQL_PASSWORD=apache
ENV MYSQL_DATABASE=se_elgg_db

COPY elgg.sql  /docker-entrypoint-initdb.d
