# peliculas/urls.py

from django.urls import path
from . import views  # Importa las vistas de la aplicación

app_name = 'peliculas'  # Define el espacio de nombres

urlpatterns = [
    path('', views.home, name='home'),  # Ruta para la página principal
]
