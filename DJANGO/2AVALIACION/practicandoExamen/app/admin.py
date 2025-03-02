from django.contrib import admin
from .models import Product,Category

# Register your models here.

class ProductAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("name",)}
    list_filter = ("name", "price",)
    list_display = ("name", "description","price",)
    
admin.site.register(Product, ProductAdmin)
admin.site.register(Category)