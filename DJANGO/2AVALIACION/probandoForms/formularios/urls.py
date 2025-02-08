from django.urls import path
from . import views

urlpatterns = [
    path("", views.HomeView.as_view(), name="home"),
    path("all_students/", views.AllStudents.as_view(), name="all_students"),
    path("delete_student/<int:pk>/", views.DeleteStudent.as_view(), name="delete_student"),
    path("update_student/<int:pk>/", views.UpdateStudent.as_view(), name="update_student"),
]
