from django.shortcuts import render
from .models import Courses
from django.shortcuts import render, get_object_or_404
# Create your views here.

def home(request):
 return render(request,'coursesHtmls/home.html')

def courses(request):
    courses=Courses.objects.all()
    return render(request,'coursesHtmls/courses.html',{'courses':courses})

def detail(request,name):
    course = get_object_or_404(Courses, name=name)
    return render(request, 'coursesHtmls/detail.html', {'course':course})
