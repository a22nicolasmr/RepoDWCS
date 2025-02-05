from django.db import models
from django import forms

# Create your models here.

class Review(models.Model):
    user_name=models.CharField(max_length=100,default="")
    password=models.CharField(max_length=100,default="")
    city=models.CharField(max_length=100,default="")
    web_server=models.CharField(max_length=100,default="")
    role=models.CharField(max_length=100,default="")
    sign=models.CharField(max_length=100,default="")

    def __str__(self):
        return f'{self.user_name} - {self.city} - {self.web_server} - {self.role} - {self.sign}'



