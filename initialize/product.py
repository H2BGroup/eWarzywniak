import random
from io import BytesIO
import requests

def setProductQuantity(prestashop, productId, quantity):
    id = prestashop.search('stock_availables', options={'filter[id_product]': productId})
    schema = prestashop.get('stock_availables', resource_id=id[0])

    schema['stock_available']['depends_on_stock'] = 0
    schema['stock_available']['quantity'] = quantity

    return prestashop.edit('stock_availables', schema)

def addProduct(prestashop, product, categoryIds, schema):

    schema['product'].pop('position_in_category')
    schema['product'].pop('manufacturer_name')
    schema['product'].pop('quantity')

    schema['product']['state'] = 1
    schema['product']['active'] = 1
    schema['product']['description']['language'][0]['value'] = product['description']
    schema['product']['description_short']['language'][0]['value'] = product['short_description']
    schema['product']['name']['language'][0]['value'] = product['title']
    schema['product']['price']['value'] = float(product['price'].replace(',', '.'))
    schema['product']['show_price']['value'] = 1
    schema['product']['minimal_quantity'] = 1
    schema['product']['available_for_order'] = 1

    schema['product']['id_category_default']['value'] = 1
    schema['product']['associations']['categories']['category'] = []
    for id in categoryIds:
        schema['product']['associations']['categories']['category'].append({'id': id})

    response =  prestashop.add('products', schema)
    id = response['prestashop']['product']['id']

    setProductQuantity(prestashop, id, random.randint(0, 10))

    return id

def addProductImage(prestashop, productId, imageURL):
    data = requests.get(imageURL).content
    buffer = BytesIO(data)

    divided = imageURL.split('/')
    imageName = divided[len(divided)-1]

    return prestashop.add(f'/images/products/{productId}', files=[('image', imageName, buffer.getvalue())])