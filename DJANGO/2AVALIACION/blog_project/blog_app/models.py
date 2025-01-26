from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator


# Create your models here.
class Tag(models.Model):
    caption=models.CharField(max_length=200)
    
    def __str__(self):
        return f"{self.caption}"
    
class Author(models.Model):
    first_name=models.CharField(max_length=200)
    last_name=models.CharField(max_length=200)
    email_adress=models.EmailField()
    
    def __str__(self):
        return f"{self.first_name}, {self.last_name}, {self.email}, {self.adress}"
    
class Post(models.Model):
    title=models.CharField(max_length=200)
    excerpt=models.CharField(max_length=200)
    image=models.ImageField()
    date=models.DateField(auto_now=True)
    slug=models.SlugField(unique=True,db_index=True)
    content=models.TextField(validators=[MinValueValidator(10)])
    author=models.ForeignKey(Author,null=True,on_delete=models.SET_NULL,related_name="fkposts",blank=True)
    tag=models.ManyToManyField(Tag)
    
    def __str__(self):
        return f"{self.first_name}, {self.image}, {self.date}, {self.slug}, {self.content}"

