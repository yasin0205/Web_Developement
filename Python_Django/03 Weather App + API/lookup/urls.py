from django.urls import path
from . import views #call the view

#http://www.airnowapi.org/aq/observation/zipCode/current/?format=application/json&zipCode=~zipCode~&distance=25&API_KEY=8F18D17C-3D0E-4858-915B-5D5D02008588
urlpatterns = [
    path('', views.home, name='home'),
    path('about.html', views.about, name='about'),
]
