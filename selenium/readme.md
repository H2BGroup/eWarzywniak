# eWarzywniak project for Electronic Business classes

Script that tests the store using Selenium. It performs the following operations:
- Add 10 products to the cart, each in varying quantities, from two different categories.
- Search for a product by name and add a randomly selected product from the search results to the cart.
- Remove 3 products from the cart.
- Complete the registration process for a new account.
- Place an order for the items currently in the cart.
- Select the payment method: cash on delivery.
- Choose one of two carriers for shipping.
- Confirm the order.
- Check the status of the placed order.
- Download the VAT invoice.


To run the program you need to:

1. Activate environment and download needed libraries
   
    ```shell
    python3 -m venv env
    source env/bin/activate
    pip install -r requirements.txt
    ```
2. You need to have the store running.
3. Run with

    ```shell
    python main.py
    ```