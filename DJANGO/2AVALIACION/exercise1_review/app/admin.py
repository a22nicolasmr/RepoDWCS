from django.contrib import admin
from .models import Degree,Student

# Register your models here.

class StudentAdmin(admin.ModelAdmin):
    prepopulated_fields={"slug":("name","surname")}
    list_filter=("name","surname")
    list_display=("name","surname","degree")
admin.site.register(Student,StudentAdmin)
admin.site.register(Degree)