from django.shortcuts import render
from .models import Reseñas
# Create your views here.

def reseñas(request):
    return render(request,"reseñasHtmls/reseñas.html")
