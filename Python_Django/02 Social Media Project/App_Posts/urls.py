from django.urls import path
from App_Posts import views

app_name = 'App_Posts'

urlpatterns = [
    path('', views.Home, name='home'),
]