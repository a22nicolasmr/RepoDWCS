from django.db import models

# Create your models here.
class Courses(models.Model):
    name=models.CharField(max_length=100)
    longDescription=models.TextField()
    photo=models.ImageField(upload_to='courses/images/')