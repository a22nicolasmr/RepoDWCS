from django.shortcuts import render
from django.views.generic import ListView
from .models import *
# Create your views here.


class ProductList(ListView):
    template_name="appHtmls/product_list.html"
    model=Product
    context_object_name="products"
    
    def get_queryset(self):
        base_query = super().get_queryset()
        data = base_query.filter(price__gt=4)
        return data