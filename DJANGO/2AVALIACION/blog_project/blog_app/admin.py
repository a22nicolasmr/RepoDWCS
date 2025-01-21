from django.contrib import admin
from .models import Tag, Author, Post

# Register your models here.

class PostAdmin(admin.ModelAdmin):
    list_display = ['title', 'date', 'author']  # Cambiado a lista
    list_filter = ['author', 'tag', 'date']  # Cambiado a lista
    prepopulated_fields = {'slug': ('title',)}  # Corregido el paréntesis

admin.site.register(Tag)
admin.site.register(Author)
admin.site.register(Post, PostAdmin)
