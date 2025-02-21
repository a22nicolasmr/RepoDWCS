from django.urls import path
from . import views

urlpatterns = [
    path('',views.ListExercises.as_view(),name="home"),
    path("exercises/<int:pk>", views.SingleDetailExercise.as_view(),name="detail"),
    path("add_exercise",views.AddExercise.as_view(),name="add_exercise")
]
