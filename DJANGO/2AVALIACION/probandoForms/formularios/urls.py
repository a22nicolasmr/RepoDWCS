from django.urls import path
from . import views

urlpatterns = [
    path("",views.HomeView.as_view()),
    path("all_students",views.AllStudents.as_view(),name="all_students")
]