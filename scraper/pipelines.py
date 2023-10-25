# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html


# useful for handling different item types with a single interface
from itemadapter import ItemAdapter


class ScraperPipeline:
    def process_item(self, item, spider):
        adapter = ItemAdapter(item)
        if adapter.get("image"):
            if "http" not in adapter["image"]:
                adapter["image"] = None

        if adapter.get("description"):
            adapter["description"] = ''.join(adapter["description"])
            adapter["description"] = adapter["description"].replace('\n', '<br>')
        else:
            adapter['description'] = ''
        
        if '<' in adapter["title"]:
            adapter["title"] = adapter["title"].replace('<', 'mniej niż ')

        return item
