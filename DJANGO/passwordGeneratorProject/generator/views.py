from django.shortcuts import render
from django.http import HttpResponse
import random
# Create your views here.

def home(request):
    # return HttpResponse("Hello there manin") 
    return render(request,'generator/home.html' ,{'password':'valorPassword'})
  
def about(request):
    # return HttpResponse("Hello there manin") 
    return render(request,'generator/about.html')
  

def password(request): 
    #primero cogemos el lenght indicado
    #en funcion de los checkboxes seleccionados , añadimos mas cosas a la lista o no
    #por medio de un for , usando un random, se iran añadiendo los caracteres de forma aleatoria a la contraseña y despues se devolvera
    characters=list("abcdefghijklmnopqrstuwxyz")
    
    if request.GET.get("uppercase"):
      characters.extend(list("ABCDEFGHIJKLMNOPQRSTUWXYZ"))
      
    if request.GET.get("numbers"):
      characters.extend(list("0123456789"))
      
    if request.GET.get("specialCharacters"):
      characters.extend(list("!?¿^*Ç[]\{\}@#~"))
    
    length=int(request.GET.get('length',12))
    
    thePassword=""  
    
    for x in range(length):
        thePassword+=random.choice(characters)
    return render(request,'generator/password.html',{'password':thePassword})