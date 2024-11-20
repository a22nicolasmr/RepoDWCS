from django.urls import path
from . import views


app_name = 'reseñas'

urlpatterns = [
    path('', views.reseñas, name="reseñas"),
]