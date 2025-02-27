from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.text import slugify
from django. Urls import reverse

# Create your models here.

class Degree(models.Model):
    name=models.CharField(max_length=100)
    description=models.TextField(max_length=100)
    number_years=models.IntegerField(validators=[MinValueValidator(0), MaxValueValidator(4)])

class Student(models.Model):
    name=models.CharField(max_length=100)
    surname=models.CharField(max_length=100)
    picture=models.ImageField(upload_to="app/images")
    age=models.IntegerField(validators=[MinValueValidator(1970), MaxValueValidator(2010)])
    slug=models.SlugField(default="", null=False, db_index=True, unique=True) 
    finished_degree=models.BooleanField()
    degree=models.ForeignKey(Degree,on_delete=models.CASCADE,null=True,related_name="fkstudents")
    
    
    def get_absolute_url(self):
        return reverse("student_detail", args=[self.slug])
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.title)
        super().save(*args, **kwargs)