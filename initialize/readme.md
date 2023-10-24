# eWarzywniak project for Electronic Business classes

Skrypt inicjujący produkty i kategorie

Aby uruchomić program należy:

1. Aktywować środowisko i pobrać potrzebne biblioteki
   
    ```shell
    python3 -m venv env
    source env/bin/activate
    pip install -r requirements.txt
    ```
2. Utworzyć plik `.env`

    ```js
    WEBSERVICE_KEY='Klucz wygenerowany w panelu admina Prestashop'
    PRESTASHOP_API_URL='Adres api sklepu Prestashop np.: http://localhost:8080/api'
    SCRAPPED_DATA_PATH='../scraper/warzywniak.json'
    ```
3. Mieć pobrany plik z wynikiem scrapowania.
4. Uruchomić za pomocą

    ```shell
    python main.py
    ```