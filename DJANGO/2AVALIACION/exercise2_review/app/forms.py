from django import forms

from .models import Product

class AddProductForm(forms.ModelForm):
    class Meta:
      model=Product
      fields=["name","description","price","picture","category"]
      labels={
          "name":"Product name:",
          "description":"Product description:",
          "price":"Product price:",
          "picture":"Product picture",
          "category":"Product category"
      }
      error_messages={
          "name":{
              "required":"Product name is required"
          }
      }