from django.shortcuts import render
from .models import Registration
# Create your views here.

def registration(request):
 registration=Registration.objects.all()
 return render(request, 'registrationHtmls/registration.html', {'registration':registration})