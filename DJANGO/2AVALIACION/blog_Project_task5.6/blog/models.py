from django.db import models
from django.core.validators import MinLengthValidator


# Create your models here.

class Tag(models.Model):
    caption = models.CharField(max_length=100)

    def __str__(self):
        return self.caption


class Author (models.Model):
    first_name= models.CharField(max_length=100)
    last_name= models.CharField(max_length=100)
    email=models.EmailField(max_length=254, unique=True)
    
    def __str__(self):
        return f"{self.first_name, self.last_name, self.email}"
    
    
class Post(models.Model):
    title = models.CharField(max_length=200)
    excerpt = models.TextField()
    image_name = models.ImageField(upload_to="images",null=True)
    date = models.DateField(auto_now=True)
    slug = models.SlugField(unique=True, db_index=True)
    content = models.TextField(validators=[MinLengthValidator(10)])
    author = models.ForeignKey(Author,null=True,on_delete=models.SET_NULL, related_name='pkposts')
    tags= models.ManyToManyField(Tag)

    def __str__(self):
        return self.title
    
class Comment(models.Model):
    user_name=models.CharField(max_length=120)
    user_email=models.EmailField()
    text=models.TextField(max_length=400)
    post=models.ForeignKey(Post,on_delete=models.CASCADE,related_name="comments")
    

    
    

    
    

