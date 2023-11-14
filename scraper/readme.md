# eWarzywniak project for Electronic Business classes

Script that downloads products and categories from https://skladwarzywiowocow.pl/

To run the program you need to

1. Activate environment and download needed libraries
   
    ```shell
    python3 -m venv env
    source envbinactivate
    pip install -r requirements.txt
    ```

2. Run with

    ```shell
    scrapy crawl warzywniak
    ```