from django.urls import path
from . import views

urlpatterns = [
    path('',views.ListExercises.as_view(),name="home")
]
