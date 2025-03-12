from django import forms
from .models import Student

class AddStudentForm(forms.ModelForm):
    class Meta:
        model=Student
        fields="__all__"
        exclude=['slug']
        
        labels={
            "name":"Your name",
            "surname":"Your surname",
            "image":"Student image",
            "finished_degree":"Finishe degree",
            "degree":"Your degree"
        }