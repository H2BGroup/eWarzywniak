from prestapyt import PrestaShopWebServiceDict
from pprint import pprint
import json

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

def addProduct(prestashop, product, categoryId):
    schema = prestashop.get('products', options={'schema': 'synopsis'})

    schema['product'].pop('position_in_category')
    schema['product'].pop('manufacturer_name')
    schema['product'].pop('quantity')

    schema['product']['state'] = 1
    schema['product']['active'] = 1
    schema['product']['description']['language'][0]['value'] = '\n'.join(product['description'])
    schema['product']['description_short']['language'][0]['value'] = product['short_description']

    schema['product']['id_category_default']['value'] = categoryId
    schema['product']['name']['language'][0]['value'] = product['title']
    schema['product']['price']['value'] = float(product['price'].replace(',', '.'))
    schema['product']['show_price']['value'] = 1
    

    pprint(schema)

    return prestashop.add('products', schema)


WEBSERVICE_KEY = 'IK9V9749QYEE5V1QIASHG729V7YJQLEH'

prestashop = PrestaShopWebServiceDict('http://localhost:8080/api', WEBSERVICE_KEY)

categories = {}

f = open('../scraper/warzywniak.json')
data = json.load(f)

parentCategoryId = getCategoryId(prestashop, "Kategorie")

if parentCategoryId is None:
    parentCategoryId = addCategory(prestashop, "Kategorie", 2)

# for entry in data:
#     if 'category_name' in entry:
#         id = addCategory(prestashop, entry['category_name'], parentCategoryId)
#         categories[entry['category_name']] = id
#     else:
#         pass

product = {"title": "Ekologiczna kostka rosołowa wołowa", "category": ["Przyprawy, sól, cukier"], "price": "6,49", "image": "https://skladwarzywiowocow.pl/wp-content/uploads/2022/11/ekologiczna-kostka-rosolowa-wolowa-416x416.png", "large_image": "https://skladwarzywiowocow.pl/wp-content/uploads/2022/11/ekologiczna-kostka-rosolowa-wolowa.png", "short_description": "Kostki rosołowe to kompozycja ekologicznych ziół i przypraw polecana do przyrządzania zup, rosołów, sosów, makaronów i innych potraw. Kostki nie zawierają glutaminianu sodu czy oleju palmowego. Z ich pomocą łatwo przygotujesz zdrową zupę dla całej rodziny.", "description": ["Opis", "Skład:", "\nsól morska, masło shea*, pomidory*, skrobia kukurydziana*, prażona cebula*, seler*, 2,5% sproszkowane mięso wołowe*, skarmelizowany cukier*, kurkuma*, ekstrakt z drożdży,  naturalny aromat, lubczyk liście*, czosnek*, pieprz*.", "\n* produkty pochodzące z kontrolowanych, certyfikowanych upraw ekologicznych"]}

pprint(addProduct(prestashop, product, 3))