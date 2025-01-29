from django import forms

class ReviewForm(forms.Form):
    OPCIONES = [
        ('opcion1', 'opcion2','opcion2')
    ]
    
    user_name=forms.CharField(label="Name:",max_length=100,error_messages={
        "required":"You must fill your name",
        "max_length":"Please enter a smaller name"
    })
    password=forms.CharField(label="Pasword:",error_messages={
        "required":"You must fill your password"
    })
    city_employment=forms.CharField(label="City of employment:",max_length=100,error_messages={
        "required":"You must fill your city of employment",
        "max_length":"Please enter a city of employment"
    })
    select=forms.ChoiceField(choices=OPCIONES,label="Select one")