from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.urls import reverse
from django.utils.text import slugify

class Book(models.Model):
    title=models.CharField(max_length=50)
    rating=models.IntegerField(validators=[MinValueValidator(1),MaxValueValidator(5)])
    author=models.CharField(blank=True,null=True, max_length=100)
    is_bestselling=models.BooleanField(default=False)
    slug = models.SlugField(default="", null=False, db_index=True,blank=True)

    
    # *args permite meter unha lista de numeros de longitud indeterminada
    # **kwargs lo mismo pero con lista clave valor
        
    def save(self, *args, **kwargs):
        self.slug = slugify(self.title)  
        # este metodo hace que el titulo se guarde con el siguiente formato:
        # nico-miguez-1
        super().save(*args, **kwargs)
        


    def get_absolute_url(self):
        return reverse("book-detail", args=[self.slug])
        
    def __str__(self):
        return f"Id= {self.id},Title= {self.title}, rating= {self.rating}, author= {self.author} , bestSeller= {self.is_bestselling} \n"

 