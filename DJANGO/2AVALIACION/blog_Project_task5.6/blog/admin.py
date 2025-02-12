from django.contrib import admin
from .models import Post, Author, Tag,Comment

class PostAdmin(admin.ModelAdmin):
    list_display = ('title', 'date', 'author')
    list_filter = ('author', 'tags', 'date')
    prepopulated_fields = {'slug': ('title',)}

admin.site.register(Post, PostAdmin)
admin.site.register(Author)
admin.site.register(Tag)
admin.site.register(Comment)

