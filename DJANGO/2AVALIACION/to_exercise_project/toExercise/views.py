from django.shortcuts import render
from django.views.generic import ListView,DetailView,CreateView
from .models import Exercise
from .forms import AddExerciseForm

# Create your views here.
class ListExercises(ListView):
    template_name="toExerciseHtmls/home.html"
    model=Exercise
    context_object_name="exercises"

    def get_queryset(self):
        exercises=Exercise.objects.order_by("-date")
        return exercises
    
    
class SingleDetailExercise(DetailView):
    template_name="toExerciseHtmls/detail.html"
    model=Exercise
    
class AddExercise(CreateView):
    model=Exercise
    form_class=AddExerciseForm
    template_name="toExerciseHtmls/addExercise.html"
    success_url="toExerciseHtmls/home.html"
    