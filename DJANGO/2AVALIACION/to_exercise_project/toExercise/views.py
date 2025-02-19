from django.shortcuts import render
from django.views.generic import ListView
from .models import Exercise

# Create your views here.
class ListExercises(ListView):
    template_name="toExerciseHtmls/home.html"
    model=Exercise
    context_object_name="exercises"