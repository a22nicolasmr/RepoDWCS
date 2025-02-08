from django.shortcuts import render
from django.http import HttpResponse
from django.views import View
from .models import Student
from .forms import AddStudentForm,UpdateStudentForm,DeleteStudentForm
from django.views.generic.edit import CreateView
from django.views.generic import DeleteView,UpdateView
from django.views.generic import ListView
from django.urls import reverse_lazy

# Create your views here.

class HomeView(CreateView):
    model=Student
    form_class=AddStudentForm
    template_name="studentHtmls/home.html"
    success_url = reverse_lazy("all_students")
    
class AllStudents(ListView):
    template_name="studentHtmls/all_students.html"
    model = Student
    context_object_name = "students"

class UpdateStudent(UpdateView):
    model=Student
    form_class=UpdateStudentForm
    template_name="studentHtmls/update_student.html"
    success_url = reverse_lazy("all_students")
    
    def get_object(self, queryset=None):
        return Student.objects.get(id=self.kwargs['pk'])
    
class DeleteStudent(DeleteView):
    model=Student
    template_name="studentHtmls/delete_student.html"
    success_url = reverse_lazy("all_students")
    
    def get_object(self, queryset=None):
        return Student.objects.get(id=self.kwargs['pk'])