from django.db import models

# Create your models here.
class Registration(models.Model):
    name=models.CharField(max_length=100)
    surname=models.CharField(max_length=100)
    age=models.CharField(max_length=100)
    date=models.DateField()