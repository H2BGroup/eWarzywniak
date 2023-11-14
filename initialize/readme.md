# eWarzywniak project for Electronic Business classes

Script that initializes products and categories

To run the program you need to:

1. Activate environment and download needed libraries
   
    ```shell
    python3 -m venv env
    source env/bin/activate
    pip install -r requirements.txt
    ```
2. Create file `.env`

    ```js
    WEBSERVICE_KEY='Key generated in Prestashop admin panel'
    PRESTASHOP_API_URL="Shop's api address for example: http://localhost:8080/api"
    SCRAPPED_DATA_PATH='../scraper/warzywniak.json'
    ```
3. You need to have file with scrapped products downloaded.
4. Run with

    ```shell
    python main.py
    ```