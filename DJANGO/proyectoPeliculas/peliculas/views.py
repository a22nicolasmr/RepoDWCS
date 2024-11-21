from django.shortcuts import render
from .models import Peliculas

# Create your views here.
def home(request):
    peliculas=Peliculas.objects.all()
    return render(request,'peliculasHtmls/home.html', {'peliculas':peliculas})