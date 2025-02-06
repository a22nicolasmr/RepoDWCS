from django.shortcuts import render
from django.http import HttpResponse
from django.views import View
from .models import Student
from .forms import AddStudentForm
from django.views.generic.edit import CreateView
from django.views.generic import ListView

# Create your views here.

class HomeView(CreateView):
    model=Student
    form_class=AddStudentForm
    template_name="studentHtmls/home.html"
    success_url = "studentHtmls/all_students.html"
    
class AllStudents(ListView):
    template_name="studentHtmls/all_students.html"
    model = Student
    context_object_name = "students"

class UpdateStudent(CreateView):
    model=Student
    form_class=AddStudentForm
    template_name="studentHtmls/update_student.html"
    success_url = "studentHtmls/all_students.html"
    
class DeleteStudent(CreateView):
    model=Student
    form_class=AddStudentForm
    template_name="studentHtmls/delete_student.html"
    success_url = "studentHtmls/all_students.html"