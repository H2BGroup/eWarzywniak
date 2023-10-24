from prestapyt import PrestaShopWebServiceDict, PrestaShopWebServiceError
from pprint import pprint
import json
import random
from io import BytesIO
import requests

def getCategoryId(prestashop, category):
    ids = prestashop.search('categories', options={'filter[name]': category})
    if len(ids) > 0:
        return ids[0]
    else:
        return None

def addCategory(prestashop, categoryName, parentId):
    schema = prestashop.get('categories', options={'schema': 'synopsis'})

    schema['category'].pop('level_depth')
    schema['category'].pop('nb_products_recursive')

    schema['category']['active'] = 1
    schema['category']['id_parent'] = parentId
    schema['category']['is_root_category'] = 0

    schema['category']['name']['language'][0]['value'] = categoryName

    schema['category']['description']['language'][0]['value'] = f'Kategoria zawierająca: {categoryName}'

    response = prestashop.add('categories', schema)

    return response['prestashop']['category']['id']

def setProductQuantity(prestashop, productId, quantity):
    id = prestashop.search('stock_availables', options={'filter[id_product]': productId})
    schema = prestashop.get('stock_availables', resource_id=id[0])

    schema['stock_available']['depends_on_stock'] = 0
    schema['stock_available']['quantity'] = quantity

    return prestashop.edit('stock_availables', schema)

def addProduct(prestashop, product, categoryIds):
    schema = prestashop.get('products', options={'schema': 'synopsis'})

    schema['product'].pop('position_in_category')
    schema['product'].pop('manufacturer_name')
    schema['product'].pop('quantity')

    schema['product']['state'] = 1
    schema['product']['active'] = 1
    schema['product']['description']['language'][0]['value'] = '\n'.join(product['description'])
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

    setProductQuantity(prestashop, id, random.randint(1, 200))

    return id

def addProductImage(prestashop, productId, imageURL):
    data = requests.get(imageURL).content
    buffer = BytesIO(data)

    divided = imageURL.split('/')
    imageName = divided[len(divided)-1]

    return prestashop.add(f'/images/products/{productId}', files=[('image', imageName, buffer.getvalue())])



WEBSERVICE_KEY = 'IK9V9749QYEE5V1QIASHG729V7YJQLEH'

prestashop = PrestaShopWebServiceDict('http://localhost:8080/api', WEBSERVICE_KEY)

categories = {}

f = open('../scraper/warzywniak.json')
data = json.load(f)

parentCategoryId = getCategoryId(prestashop, "Kategorie")

if parentCategoryId is None:
    parentCategoryId = addCategory(prestashop, "Kategorie", 2)

for i, entry in enumerate(data):
    if 'category_name' in entry: #add category
        id = addCategory(prestashop, entry['category_name'], parentCategoryId)
        categories[entry['category_name']] = id

        
    else: #add product
        categoryIds = []
        for category in entry['category']:
            if category in categories.keys():
                categoryIds.append(categories[category])

        try:
            id = addProduct(prestashop, entry, categoryIds)
        except PrestaShopWebServiceError:
            print(f'Error with: {entry}')

        if entry['large_image'] is not None:
            try:
                addProductImage(prestashop, id, entry['large_image'])
            except PrestaShopWebServiceError:
                print(f'Error with: {entry}')

    print(f'{i}/{len(data)}')


