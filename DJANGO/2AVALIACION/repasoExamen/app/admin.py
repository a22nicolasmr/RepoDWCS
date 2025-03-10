from django.contrib import admin
from .models import Product,Category

# Register your models here.

class ProductAdmin(admin.ModelAdmin):
    prepopulated_fields={"slug":("name","price",)}
    list_filter = ("name", "price","description",)
    list_display = ("name", "price",)
    
admin.site.register(Product, ProductAdmin)
admin.site.register(Category)