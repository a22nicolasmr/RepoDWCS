from django import forms

from .models import Exercise

class AddExerciseForm(forms.ModelForm):
    class Meta:
        model=Exercise
        
        fields=["title","repetitions","weight","category"]
        labels={
            "title":"Exercise title",
            "repetitions":"Exercise repetitions",
            "weight":"Weight",
            "category":"Category"
        }
        
        error_messages={
            "title":{
                "required":"Your name must not be empty!",
                "max_lenght":"Please enter a shorter name!"
            },
            "repetitions":{
                "required":"Your repetitions must not be empty!",
            },
            "weight":{
                "required":"Your weight must not be empty!",
            },
            
        }
        

    