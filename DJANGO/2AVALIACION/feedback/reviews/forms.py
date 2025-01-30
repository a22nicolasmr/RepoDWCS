from django import forms
from .models import Review

# class ReviewForm(forms.Form):
#     user_name=forms.CharField(label="Name:",max_length=100,error_messages={
#         "required":"You must fill your name",
#         "max_length":"Please enter a smaller name"
#     })
#     review_text=forms.CharField(label="Your feedback", widget=forms.Textarea,max_length=200)
#     rating=forms.IntegerField(label="Your rating",min_value=1,max_value=5)

class ReviewForm(forms.ModelForm):
    class Meta:
      model=Review
      field='__all__'
      labels={
          "username": "Your name",
          "review_text": "Your Feedback",
          "rating": "Your rating",
      }
      
      error_messages={
          "username":{
              "required":"Your name is required",
              "max_length":"Please enter a smaller name"
          }
          
      }