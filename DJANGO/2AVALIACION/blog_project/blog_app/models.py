from django.db import models

# Create your models here.

class Author(models.Model):
    first_name=models.CharField(max_length=200)
    last_name=models.CharField(max_length=200)
    email=models.CharField(max_length=100)
    adress=models.CharField(max_length=250)
    
    def __str__(self):
        return f"{self.first_name}, {self.last_name}, {self.email}, {self.adress}"
    
class Post(models.Model):
    first_name=models.CharField(max_length=200)
    image=models.ImageField()
    date=models.DateField()
    slug=models.SlugField()
    content=models.CharField(max_length=200)
    
    def __str__(self):
        return f"{self.first_name}, {self.image}, {self.date}, {self.slug}, {self.content}"

class Tag(models.Model):
    caption=models.CharField(max_length=200)
    
    def __str__(self):
        return f"{self.caption}"