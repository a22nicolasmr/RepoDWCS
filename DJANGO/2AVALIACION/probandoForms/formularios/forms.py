from django import forms 
from .models import Student

class AddStudentForm(forms.ModelForm):
    class Meta:
        model=Student
        fields="__all__"
        labels={
            "name": "Your name",
            "degree": "Your degree",
        }
        
        error_messages={
            "name":{
                "max_lenght":"mucha lenght"
            }
        }
        
class UpdateStudentForm(forms.ModelForm):
    class Meta:
        model=Student
        fields="__all__"
        labels={
            "name": "Your name",
            "degree": "Your degree",
        }
        
        error_messages={
            "name":{
                "max_lenght":"mucha lenght"
            }
        }
        
class DeleteStudentForm(forms.Form):
    confirm = forms.BooleanField(required=True, label="Confirm deletion")
