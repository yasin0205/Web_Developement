from django.shortcuts import render
from django.core.mail import send_mail

# Create your views here.

def home (request):
	return render(request, 'home.html', {})

def contact (request):
	if request.method == "POST":
		message_name = request.POST['message-name']
		message_email = request.POST['message-email']
		message = request.POST['message']
		#send email
		message_name, #subject
		message, # content of mail/ mail
		message_email,  # from
		['yasinislamhimaloyodesk@gmail.com'] #to
		return render(request, 'contact.html', {})
	else:
		return render(request, 'contact.html', {})