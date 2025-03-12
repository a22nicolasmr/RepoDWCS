from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.text import slugify
from django.urls import reverse

# Create your models here.

class Degree(models.Model):
    name=models.CharField(max_length=100)
    description=models.TextField(max_length=300)
    years=models.IntegerField(validators=[MinValueValidator(0), MaxValueValidator(4)])
    
    def __str__(self):
     return f"Degree name={self.name}, Degree years={self.years}"
 
class Student(models.Model):
    name=models.CharField(max_length=100)
    surname=models.CharField(max_length=100)
    image=models.ImageField(upload_to="final/images")
    slug=models.SlugField(default="", null=False, db_index=True, unique=True)
    finished_degree=models.BooleanField()
    age=models.IntegerField(null=True,blank=True)
    degree=models.ForeignKey(Degree, on_delete=models.CASCADE, null=True, related_name="fkstudent")
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name,self.surname)
        super().save(*args, **kwargs)
        
    def get_absolute_url(self):
        return reverse("student_detail", args=[self.slug])
    
    def __str__(self):
        return f"Student name={self.name}, Student age={self.age},Student degree={self.degree}"

    