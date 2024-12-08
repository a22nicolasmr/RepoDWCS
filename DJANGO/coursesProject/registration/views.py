from django.shortcuts import render
from .models import Registration

# Create your views here.
def home(request):
    registrations=Registration.objects.order_by('-date')
    return render(request, 'registrationHtmls/registration.html',{'registrations':registrations})

def response(request):
    name = request.GET.get('inputName', '')
    surname = request.GET.get('inputSurname', '')

    # Capturar estado
    status = ""
    if request.GET.get('statusA'):
        status += "a"
    if request.GET.get('statusB'):
        status += "b"
    if request.GET.get('statusC'):
        status += "c"

    # Capturar lugar seleccionado
    place = request.GET.get('place')  # Asignar un valor predeterminado

    datos = {"name": name, "surname": surname, "status": status, "place": place}
    return render(request, 'registrationHtmls/response.html', datos)
