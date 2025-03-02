from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.text import slugify
from django.urls import reverse

# Create your models here.

class Category(models.Model):
    name=models.CharField(max_length=100)
    
    def __str__(self):
        return self.name
    
class Product(models.Model):
    name=models.CharField(max_length=100)
    description=models.TextField()
    price=models.IntegerField(validators=[MinValueValidator(1), MaxValueValidator(1000)])
    picture=models.ImageField(upload_to="app/images")
    slug= models.SlugField(default="", null=False, db_index=True, unique=True)
    category=models.ForeignKey(Category, on_delete=models.CASCADE, null=True, related_name="fkCategory")

    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super().save(*args, **kwargs)
        
    def get_absolute_url(self):
        return reverse("product_detail", args=[self.slug])
     