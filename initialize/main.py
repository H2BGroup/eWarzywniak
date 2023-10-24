from prestapyt import PrestaShopWebServiceDict, PrestaShopWebServiceError
import json
from concurrent.futures import ThreadPoolExecutor, as_completed
from category import getCategoryId, addCategory
from product import addProduct, addProductImage
import copy
from dotenv import load_dotenv
import os

def handleProduct(prestashop, product, categoryIds, schema):
    try:
        id = addProduct(prestashop, product, categoryIds, schema)
    except PrestaShopWebServiceError:
        print(f'Error with: {product}')

    if product['large_image'] is not None:
        try:
            addProductImage(prestashop, id, product['large_image'])
        except PrestaShopWebServiceError:
            print(f'Error with: {product}')

load_dotenv()

prestashop = PrestaShopWebServiceDict(os.getenv('PRESTASHOP_API_URL'), os.getenv('WEBSERVICE_KEY'))

categories = {}

productSchema = prestashop.get('products', options={'schema': 'synopsis'})

f = open(os.getenv('SCRAPPED_DATA_PATH'))
data = json.load(f)

parentCategoryId = getCategoryId(prestashop, "Kategorie")

if parentCategoryId is None:
    parentCategoryId = addCategory(prestashop, "Kategorie", 2)

with ThreadPoolExecutor(10) as executor:
    futures = []
    completed = 0
    for entry in data:
        # add category
        if 'category_name' in entry:
            id = addCategory(prestashop, entry['category_name'], parentCategoryId)
            categories[entry['category_name']] = id
            completed += 1
            print(f'{completed}/{len(data)}')

        # add product   
        else:
            categoryIds = []
            for category in entry['category']:
                if category in categories.keys():
                    categoryIds.append(categories[category])
            futures.append(executor.submit(handleProduct, prestashop=prestashop, product=entry, categoryIds=categoryIds, schema=copy.deepcopy(productSchema)))

    for future in as_completed(futures):
        completed += 1
        print(f'{completed}/{len(data)}')