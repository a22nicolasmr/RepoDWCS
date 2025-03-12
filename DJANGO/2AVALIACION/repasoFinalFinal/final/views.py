from django.shortcuts import render
from django.views.generic import ListView,CreateView,DeleteView,DetailView,UpdateView,View
from .models import *
from django.urls import reverse_lazy
from .forms import AddStudentForm
from django.http import HttpResponseRedirect
# Create your views here.

class HomeView(ListView):
    template_name="finalHtmls/home.html"
    model=Student
    context_object_name = "students"
    
class AddStudentView(CreateView):
    model = Student
    form_class=AddStudentForm
    template_name = "finalHtmls/add.html"
    success_url = reverse_lazy('home')
    
class DeleteStudentView(DeleteView):
    model = Student
    template_name = "finalHtmls/delete.html"
    success_url = reverse_lazy('home')
    
class DetailStudentView(DetailView):
    template_name="finalHtmls/detail.html"
    model=Student
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_student = self.object
        request = self.request
        favorite_id = request.session.get("student_id")
        context["is_favorite"] = favorite_id == str(loaded_student.id)
        return context
    
class UpdateStudentView(UpdateView):
    model = Student
    form_class=AddStudentForm
    template_name = "finalHtmls/update.html"
    success_url = reverse_lazy('home')
    
class FavoritesView(View):
     def get(self, request):
        favorite_students = request.session.get("favorite_students", [])
        context = {}
        if favorite_students is None or len(favorite_students) == 0:
            context["is_favorite"] = False
        else:
            students = Student.objects.filter(id__in=favorite_students)
            context["students"] = students
            context["is_favorite"] = True
        return render(request, "finalHtmls/favorites.html", context)
    
     def post(self, request):
        favorite_students = request.session.get("favorite_students", [])
        student_id = int(request.POST["student_id"])
        if student_id not in favorite_students:
            favorite_students.append(student_id)
        else:
            favorite_students.remove(student_id)
        request.session["favorite_students"] = favorite_students
        return HttpResponseRedirect(reverse_lazy("home"))
    
     def is_stored_post(self, request, student_id):
        favorite_students = request.session.get("favorite_students")
        if favorite_students is None:
            is_saved_for_later = False
        else:
            is_saved_for_later = student_id in favorite_students
        return is_saved_for_later
    
class AddFavoriteView(View):
    def post(self, request):
        student_id = request.POST["student_id"]
        request.session["student_id"] = student_id
        return HttpResponseRedirect(reverse_lazy("home"))