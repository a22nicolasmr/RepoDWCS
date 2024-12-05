from django.db import models

# Create your models here.

class Courses(models.Model):
    name=models.CharField(max_length=100)
    longDescription=models.TextField()
    foto=models.ImageField(upload_to='courses/images')