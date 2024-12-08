from django.urls import path
from . import views
app_name = 'courses'
urlpatterns = [
 path('', views.home, name='home'),
 path('courses/', views.courses, name='courses'),
 path('<str:name>/', views.detail, name='detail'),
]