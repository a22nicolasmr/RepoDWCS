from django.urls import path
from . import views
app_name = 'registration'
urlpatterns = [
    path('registration/', views.registration, name='registration'),
    path('data/', views.data, name='data'),
]
