from django.shortcuts import render
from django.http import HttpResponse

def home(request):
    return render(request, 'formProject/form.html')

def responsePage(request):
    username = request.GET.get('usernameInput')
    password = request.GET.get('passwordInput')
    city = request.GET.get('cityInput')

    admin = request.GET.get('admin')
    engineer = request.GET.get('engineer')
    manager = request.GET.get('manager')
    guest = request.GET.get('guest')

    options = request.GET.get('select')

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
        'optionSelected': options,
        'signon': signon
    }

    return render(request, 'formProject/responsePage.html', datos)