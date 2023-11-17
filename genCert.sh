openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 \
    -subj "/C=PL/ST=Pomerania/L=Gdansk/O=eWarzywniak/CN=localhost" \
    -keyout ssl/apache-selfsigned.key -out ssl/apache-selfsigned.crt