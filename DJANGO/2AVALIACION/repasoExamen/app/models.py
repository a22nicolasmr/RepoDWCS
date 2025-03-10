from django.db import models
from django.utils.text import slugify
from django.core.validators import MinValueValidator, MaxValueValidator
from django.urls import reverse

# Create your models here.

class Category(models.Model):
    name=models.CharField(max_length=100)
    
    def __str__(self):
        return self.name
    
class Product(models.Model):
    name=models.CharField(max_length=100)
    description=models.TextField()
    price=models.IntegerField(validators=[MinValueValidator(0), MaxValueValidator(100000)])
    picture=models.ImageField(upload_to='repasoExamen/images')
    slug=models.SlugField(default="", null=False, db_index=True,unique=True)
    category = models.ForeignKey(Category, on_delete=models.CASCADE, null=True, related_name="fkcategory")
    
    
    def get_absolute_url(self):
        return reverse("product-url", args=[self.slug])
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name,self.price)
        super().save(*args, **kwargs)
        
    
       

            