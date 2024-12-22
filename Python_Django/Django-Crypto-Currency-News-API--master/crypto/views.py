from django.shortcuts import render

# Create your views here.
def home (request):
	import json
	import requests

	# Grap Crypto News
	api_request = requests.get("https://min-api.cryptocompare.com/data/v2/news/?lang=EN")
	api = json.loads(api_request.content)

	# Grap Crypto Price
	price_request = requests.get("https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,XLM,ADA,USDT,MIOTA,TRX&tsyms=USD")
	price = json.loads(price_request.content)
	return render (request, 'home.html' , {'api': api, 'price': price}) 



def prices (request):
	if request.method == 'POST':
		import json
		import requests 
		quotes = request.POST['quote']
		quotes = quotes.upper()
		crypto_request = requests.get("https://min-api.cryptocompare.com/data/pricemultifull?fsyms=" + quotes + "&tsyms=USD")
		crypto = json.loads(crypto_request.content)
		return render (request, 'prices.html', {'quote': quotes, 'crypto': crypto})
	else:
		return render (request, 'prices.html', {})