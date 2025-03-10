from django import forms

from .models import Product

class AddProductForm(forms.ModelForm):
    class Meta:
      model=Product
      fiedls="__all__"
      exclude=['slug']