from django.db import models

# Create your models here.

class Peliculas(models.Model):
    nombre=models.CharField(max_length=100)
    descripcion=models.TextField(max_length=500)
    imagen=models.ImageField(upload_to='peliculas/images')
    url=models.URLField()