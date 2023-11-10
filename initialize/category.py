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

    schema['category']['name']['language']['value'] = categoryName

    schema['category']['description']['language']['value'] = f'Kategoria zawierająca: {categoryName}'

    response = prestashop.add('categories', schema)

    return response['prestashop']['category']['id']