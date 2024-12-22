from django.shortcuts import render


# Create your views here.
#

def home (request): #named after home html page
	
	if request.method=="POST":   #if someone search his zipcode
		zipcode=request.POST['zipcode']
		return render(request, 'home.html', {'zipcode': zipcode})
	else:	
		# For API
		import json
		import requests # Will go to the internet and grab the data // you have to install pip install requests
		api_request = requests.get("http://www.airnowapi.org/aq/observation/zipCode/current/?format=application/json&zipCode=20002&distance=25&API_KEY=8F18D17C-3D0E-4858-915B-5D5D02008588")
		try:
			api = json.loads(api_request.content)
		except Exception as e:
			api = "Error.."
		return render(request, 'home.html', {'api': api}) # directed to the home.html page// {python dictionary}





def about (request): #named after home html page
	return render(request, 'about.html', {}) # directed to the home.html page
