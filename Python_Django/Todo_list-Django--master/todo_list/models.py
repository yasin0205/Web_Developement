from django.db import models

# Create your models here.

class List (models.Model): # List is database table and also a class name 
	item = models.CharField(max_length=200)
	completed = models.BooleanField(default=False)

	def __str__ (self):
		return self.item  # data base introduction list show by item names 