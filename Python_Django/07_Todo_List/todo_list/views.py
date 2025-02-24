from django.shortcuts import render, redirect # redirect also added for delete section redirect
from . models import List #for db
from . forms import ListForm #for forms
from django.contrib import messages #for popup message
from django.http import HttpResponseRedirect # for redirect fun in delete section 
def home (request):
	if request.method == 'POST':
		form = ListForm(request.POST or None)

		if form.is_valid():
			form.save()
			#after saving redirect to homr
			all_items = List.objects.all 
			messages.success(request,('Item has been added into todo list'))
			return render(request, 'home.html', {'all_items': all_items})

	else: #database query
		all_items = List.objects.all
		return render(request, 'home.html', {'all_items': all_items})

def about (request):
	my_name = "yasin islam"
	return render(request, 'about.html', {'first_name': my_name, 'last_name': 'talukdar'})

def delete (request, list_id):
	#db query
	item = List.objects.get(pk=list_id)
	item.delete()
	messages.success(request,('Item has been Deleted into todo list'))
	#redirect
	return redirect('home')

def cross_off (request, list_id):
	item = List.objects.get(pk=list_id)
	item.completed = True
	item.save()			
	return redirect('home')


def uncross (request, list_id):
	item = List.objects.get(pk=list_id)
	item.completed = False
	item.save()			
	return redirect('home')

def edit (request, list_id):
	if request.method == 'POST':
		item = List.objects.get(pk=list_id)
	
		form = ListForm(request.POST or None, instance=item)

		if form.is_valid():
			form.save()
			messages.success(request,('Item has been Edited'))
			return redirect('home')

	else: #database query
		item = List.objects.get(pk=list_id) #as we need just only one ID thats why get not all 
		return render(request, 'edit.html', {'item': item})
