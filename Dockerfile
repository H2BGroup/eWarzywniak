FROM prestashop/prestashop:1.7.8-apache

COPY ssl/apache-selfsigned.key /etc/ssl/private/apache-selfsigned.key
COPY ssl/apache-selfsigned.crt /etc/ssl/certs/apache-selfsigned.crt

COPY ssl/apache-selfsigned.crt /usr/local/share/ca-certificates/cacert.crt

COPY ssl/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN update-ca-certificates && a2enmod ssl && service apache2 restart