openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 \
    -subj "/C=PL/ST=Pomerania/L=Gdansk/O=eWarzywniak/CN=localhost" \
    -keyout ssl/apache-selfsigned.key -out ssl/apache-selfsigned.crt

docker cp ssl/apache-selfsigned.key prestashop:/etc/ssl/private/apache-selfsigned.key
docker cp ssl/apache-selfsigned.crt prestashop:/etc/ssl/certs/apache-selfsigned.crt

docker cp ssl/000-default.conf prestashop:/etc/apache2/sites-available/000-default.conf

docker exec prestashop a2enmod ssl
docker exec prestashop service apache2 restart

rm -rf ssl/apache-selfsigned.key
rm -rf ssl/apache-selfsigned.crt