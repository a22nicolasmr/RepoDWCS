from django.shortcuts import render
from django.http import HttpResponseRedirect
from .forms import ReviewForm
from .models import Review

# Create your views here.
def review(request):
    if request.method == 'POST':
        form=ReviewForm(request.POST)
        
        if form.is_valid():
            # Aquí se procesan los datos del formulario
            user_name = form.cleaned_data['user_name']
            password = form.cleaned_data['password']
            city_employment = form.cleaned_data['city_employment']
            select = form.cleaned_data['select']
            radio=form.cleaned_data['radio']
            check=form.cleaned_data['check']
            
            # Pasar los datos a la nueva página
            context = {
                'user_name': user_name,
                'password': password,
                'city_employment': city_employment,
                'select': select,
                'radio':radio,
                'check':check
            }
            return render(request, 'reviewsHtmls/review_results.html', context)
        
    else: 
        form=ReviewForm()
    # Enviamos o formulario a plantilla review
    # Se o usuario enviou datos, ese formulario vai ter os datos
    # Si se carga a páxina por primeia vez ese fomulario está valeiro
    return render(request,"reviewsHtmls/review.html",{
        "form":form
    })