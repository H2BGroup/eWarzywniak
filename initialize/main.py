from prestapyt import PrestaShopWebServiceDict
from pprint import pprint
import json

def getParentCategoryId(prestashop, parent):
    ids = prestashop.search('categories', options={'filter[name]': parent})
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


WEBSERVICE_KEY = 'IK9V9749QYEE5V1QIASHG729V7YJQLEH'

prestashop = PrestaShopWebServiceDict('http://localhost:8080/api', WEBSERVICE_KEY)

categories = {}

f = open('../scraper/warzywniak.json')
data = json.load(f)

parentCategoryId = getParentCategoryId(prestashop, "Kategorie")
for entry in data:
    if 'category_name' in entry:
        id = addCategory(prestashop, entry['category_name'], parentCategoryId)
        categories[entry['category_name']] = id
    else:
        pass

pprint(categories)