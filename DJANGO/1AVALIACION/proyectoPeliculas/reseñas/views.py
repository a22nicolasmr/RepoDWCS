from django.shortcuts import render
from .models import Reseñas
# Create your views here.

def reseñas(request):
    reseñas=Reseñas.objects.order_by("-fecha")
    return render(request,"reseñasHtmls/reseñas.html",{"reseñas":reseñas})
