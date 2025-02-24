
from django.contrib import admin
from django.urls import path , include #include will allow to interact with other-app-url 

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('lookup.urls')),
]
