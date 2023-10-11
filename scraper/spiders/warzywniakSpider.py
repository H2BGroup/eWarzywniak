import scrapy

class WarzywniakSpider(scrapy.Spider):
    name = "warzywniak"

    def start_requests(self):
       urls = ["https://skladwarzywiowocow.pl/sklep/warzywa/"]

       for url in urls:
           yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):
       products = response.css('div.product')

       for product in products:
           name = product.css('h3 ::text').get()
           price = product.css('bdi ::text').get()
           thumbnail = product.css('img ::attr(src)').getall()

           product_data = {
               'name': str(name),
               'price': str(price),
               'thumbnail': str(thumbnail),
           }

           yield product_data