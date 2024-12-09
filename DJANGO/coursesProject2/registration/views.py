from django.shortcuts import render
from .models import Registration
from datetime import datetime
# Create your views here.

def data(request):
 name=request.GET.get('nameInput')
 surname=request.GET.get('surNameInput')
 
 age=request.GET.get('ageInput')
 date=request.GET.get('dateInput')
 
 date = datetime.strptime(date, "%Y-%m-%d").date()
 
 data={
    'name':name,
    'surname':surname,
    'age':age,
    'date':date
 }
 return render(request,'registrationHtmls/data.html',data)

def registration(request):
  registration=Registration.objects.all()
  return render(request,'registrationHtmls/registration.html',{'registration':registration})
 