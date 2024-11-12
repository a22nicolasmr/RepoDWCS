from django.shortcuts import render
from django.http import HttpResponse


# Create your views here.
def home(request):
#  return HttpResponse("Probando")
    return render(request, 'projectHtmls/home.html')

def resultsPage(request):
    username=request.GET.get("usernameInput")
    password=request.GET.get("passwordInput")
    city=request.GET.get("cityInput")
    select=request.GET.get("select")
    
    #valor del checkBox tenemos que mirar si está seleccionado
    
    role=""
    admin=request.GET.get("admin")
    engineer=request.GET.get("engineer")
    manager=request.GET.get("manager")
    guest=request.GET.get("guest")
    
    if admin:
        role=admin
    elif engineer:
        role=engineer
    elif manager:
        role=manager
    elif guest:
        role=guest
        
    
    #valor de los radioButtons , tenemos que mirar cual esta seleccionado e irlos añadiendo a una variable
    radioButtonsValue = ""
    
    # Comprobamos si cada checkbox está seleccionado y agregamos su valor
    #comprobar si cada uno de los valores posibles está en el request y si es true , añadirlos a la variable
    if "mail" in request.GET:
        radioButtonsValue += "Mail "
    if "payroll" in request.GET:
        radioButtonsValue += "Payroll "
    if "selfservice" in request.GET:
        radioButtonsValue += "Selfservice "
    
    datos={
        'username':username,
        'password':password,
        'city':city,
        'role':role,
        'optionSelected':select,
        'valueRadio':radioButtonsValue
    }
    
    return render(request,'projectHtmls/resultsPage.html',datos)