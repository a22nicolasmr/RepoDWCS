from django import forms
from .models import Review

class ReviewForm(forms.ModelForm):
    
    class Meta:
        model = Review
        fields = ['user_name', 'password', 'city', 'web_server', 'role', 'sign']
          
    # Añadimos los widgets adecuados
    OPCIONES = [
            ('opcion1', 'Opción 1'),
            ('opcion2', 'Opción 2'),
            ('opcion3', 'Opción 3'),
        ]
    web_server = forms.ChoiceField(
        choices=OPCIONES,
        widget=forms.Select,  # Mostrar como un select dropdown
        label="Web server"
    )
    
    role = forms.ChoiceField(
        choices=OPCIONES,
        widget=forms.RadioSelect,  # Mostrar como radio buttons
        label="Role"
    )
    
    sign = forms.MultipleChoiceField(
        choices=OPCIONES,
        widget=forms.CheckboxSelectMultiple,  # Mostrar como checkboxes
        label="Loggeado en"
    )
