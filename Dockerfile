FROM prestashop/prestashop:1.7.8-apache

COPY --chmod=777 --chown=1 src /var/www/html
RUN rm -rf /var/www/html/install

COPY --chmod=777 initDB.sh initDB.sh
COPY --chmod=777 db_dump/db.sql db.sql

COPY ssl/apache-selfsigned.key /etc/ssl/private/apache-selfsigned.key
COPY ssl/apache-selfsigned.crt /etc/ssl/certs/apache-selfsigned.crt

COPY ssl/apache-selfsigned.crt /usr/local/share/ca-certificates/cacert.crt

COPY ssl/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y libmemcached-dev libssl-dev zlib1g-dev \
	&& pecl install memcached \
	&& docker-php-ext-enable memcached

RUN update-ca-certificates && a2enmod ssl && service apache2 restart
CMD apache2-foreground