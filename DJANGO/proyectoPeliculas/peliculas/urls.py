from django.urls import path
from . import views

app_name = 'peliculas' 

urlpatterns = [
    path('', views.home, name='base'),  
]
