from django.urls import path

from . import views

urlpatterns = [
    path("", views.CreateProfileView.as_view(),name='profile-list'),
    path("user_profiles/", views.ProfilesView.as_view(),name='user_profiles'),
]
