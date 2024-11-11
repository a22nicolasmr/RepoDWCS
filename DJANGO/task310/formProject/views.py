from django.shortcuts import render
from django.http import HttpResponse

def home(request):
    return render(request, 'formProject/form.html')

def responsePage(request):
    username = request.GET.get('username')
    password = request.GET.get('password')
    city = request.GET.get('city')

    option = request.GET.get('webserver')
    options = ['Apache', 'Nginx', 'Google GWS']
    optionSelected = options[int(option)]

    admin = request.GET.get('admin')
    engineer = request.GET.get('engineer')
    manager = request.GET.get('manager')
    guest = request.GET.get('guest')

    role = ""
    if admin:
        role = 'Admin'
    elif engineer:
        role = 'Engineer'
    elif manager:
        role = 'Manager'
    elif guest:
        role = 'Guest'

    mail = request.GET.get('mail')
    payroll = request.GET.get('payroll')
    selfservice = request.GET.get('selfservice')

    signon = ""
    if mail:
        signon = signon + mail
    elif payroll:
        signon = signon + " " + payroll
    elif selfservice:
        signon = signon + " " + selfservice

    datos = {
        'username': username,
        'password': password,
        'city': city,
        'role': role,
        'optionSelected': optionSelected,
        'signon': signon
    }

    return render(request, 'formProject/responsePage.html', datos)