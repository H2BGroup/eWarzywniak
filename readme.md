# eWarzywniak project for Electronic Business classes
## Description
This is a project for our university classes. The main goal was to build a Prestashop website with contents scrapped 
form an existing store.

## Used software
1. Prestashop v1.7.8-apache
2. MariaDB 10
3. Docker
4. Python 3
5. Scrapy 2.11
6. Selenium 
7. prestapyt 0.11.1

## How to run
1. The best way to run is on Linux or in WSL, if you are using Windows.
2. You need to have `Docker` installed.
3. Generate SSL certificates with (you only need to do this step once):
```
./genCert.sh
```
4. To start the shop, run command: 
```
docker compose up -d
```
5. The store should be running. Open your web browser and go to https://localhost

6. To stop and remove containers use:
```
docker compose down
```

7. To upload products, you need to run `scraper` and then `initilizer`. Chceck their folders for instructions.
8. You can also test the shop functionality with `selenium` script.

## Authors
- Jan Barczewski (188679)
- Radosław Gajewski (188687)
- Maciej Sikora (188680)
