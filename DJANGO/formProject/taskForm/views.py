from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def home(request):
 return render(request, 'generator/home.html')

def results(request):
    username=request.GET.get('usernameInput')
    password=request.GET.get('passwordInput')
    city=request.GET.get('cityInput')
    select=request.GET.get('select')
    radio=request.GET.get('status')
    
    mail=request.GET.get("mail")
    payroll=request.GET.get("payroll")
    self_service=request.GET.get("self-service")
    
    
    
    
    
    return render(request,'generator/resultsPage.html',{'username':username})
    
 