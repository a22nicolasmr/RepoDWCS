from django.db import models

# Create your models here.

class Reseñas(models.Model):
    autor=models.CharField(max_length=200)
    titulo=models.CharField(max_length=150)
    texto=models.TextField(max_length=1000)
    fecha=models.DateField(auto_now_add=True)