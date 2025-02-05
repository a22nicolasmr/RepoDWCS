from django import forms

class ReviewForm(forms.Form):
    OPCIONES = [
    ('opcion1', 'Opción 1'),
    ('opcion2', 'Opción 2'),
    ('opcion3', 'Opción 3'),
    ]   
    
    user_name=forms.CharField(label="Name:",max_length=100,error_messages={
        "required":"You must fill your name",
        "max_length":"Please enter a smaller name"
    })
    
    password=forms.CharField(label="Pasword:",
        widget=forms.PasswordInput(attrs={"placeholder":"Enter password"}),error_messages={
        "required":"You must fill your password"
    })
    
    city_employment=forms.CharField(label="City of employment:",max_length=100)
    
    select=forms.ChoiceField(choices=OPCIONES,label="Web server")
    
    radio = forms.ChoiceField(
        choices=OPCIONES,              # Las opciones del campo
        widget=forms.RadioSelect,      # Renderizar como radio buttons
        label="Please specify your role:"  # Etiqueta del campo
    )
    
    check = forms.MultipleChoiceField(choices=OPCIONES,
    widget=forms.CheckboxSelectMultiple(attrs={'class': 'checkbox-class'}),
    label="Single Sign-on to the following:"
    )