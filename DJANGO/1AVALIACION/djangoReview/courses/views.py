from django.shortcuts import render
from django.http import HttpResponse
from .models import Courses
from django.shortcuts import render, get_object_or_404
# Create your views here.

def home(request):
#  return HttpResponse("Funciona")
    return render(request, 'coursesHtmls/home.html')

def all_courses(request):
    courses=Courses.objects.all()
    return render(request, 'coursesHtmls/courses.html', {'courses':courses}) 

def detail(request,name):
 course=get_object_or_404(Courses,name=name)
 return render(request,'coursesHtmls/courseDetail.html',{'course':course})
