import scrapy

from .. import items
class WarzywniakSpider(scrapy.Spider):
    name = "warzywniak"

    custom_settings = {
        'FEEDS': {
            'warzywniak.json': {'format': 'json', 'overwrite': True},
        }
    }
    def start_requests(self):
       urls = ["https://skladwarzywiowocow.pl"]

       for url in urls:
           yield scrapy.Request(url=url, callback=self.parse_category)

    def parse(self, response):
       products = response.css('div.product')

       for product in products:
           product_url = product.css('a.woocommerce-LoopProduct-link ::attr(href)').get()

           yield response.follow(product_url, callback=self.parse_product_page)

       next_page = response.css('a.next ::attr(href)').get()

       if next_page:
           yield response.follow(next_page, callback=self.parse)

    def parse_category(self, response):
        categories = response.css('div.primary-navigation li.menu-item-type-taxonomy a ::attr(href)').getall()

        container = {'items': []}

        for category in categories:

            # yield {
            #     'category_name': str(category),
            # }
            yield response.follow(category, callback=self.parse)

    def parse_product_page(self, response):

        product = items.Product()

        product['title'] = response.css('h1 ::text').get()
        product['price'] = response.css('bdi ::text').get()
        product['image'] = response.css('img.wp-post-image ::attr(src)').get()
        product['large_image'] = response.css('img.wp-post-image ::attr(data-large_image)').get()
        product['short_description'] = response.css('div.woocommerce-product-details__short-description ::text').get()
        product['description'] = response.css('div#tab-description ::text').getall()

        yield product
