FROM imagine10255/ubuntu12-apache-php53
# RUN  rm /etc/apache2/sites-available/default-ssl



RUN sed -i -e 's/archive.ubuntu.com\|security.ubuntu.com/old-releases.ubuntu.com/g' /etc/apt/sources.list
# RUN add-apt-repository ppa:ondrej/php
RUN apt-get update


RUN mkdir /etc/apache2/ssl
# RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/apache.key -out /etc/apache2/ssl/apache.crt -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.heartbleedlabelgg.com"  


ADD ssl /etc/apache2/ssl/
ADD apache2/apache2.conf /etc/apache2/apache2.conf
ADD apache2/default /etc/apache2/sites-available/default
ADD apache2/default-ssl /etc/apache2/sites-available/default-ssl
ADD apache2/ori_default /etc/apache2/sites-available/ori_default
ADD phpmyadmin/apache.conf /etc/phpmyadmin/apache.conf
COPY www /var/www/
RUN a2enmod ssl
RUN a2enmod rewrite
WORKDIR /etc/apache2/sites-available/
RUN a2ensite *
RUN service apache2 restart

EXPOSE 80
EXPOSE 443

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2


CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
