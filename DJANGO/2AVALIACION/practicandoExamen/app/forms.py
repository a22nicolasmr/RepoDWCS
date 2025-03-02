from django import forms

from .models import Product

class ProductForm(forms.ModelForm):
    class Meta:
      model=Product
      fields=["name","description","price","picture","category"]
      labels={
          "name":"Product name",
          "description":"Product description",
          "price":"Product price",
          "picture":"Product picture",
          "category":"Product category",
      }
      
      error_messages={
          "name":{
              "max_lenght":"Enter a shorter name please"
          }
      }