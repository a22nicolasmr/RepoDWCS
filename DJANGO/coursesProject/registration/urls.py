from django.urls import path
from . import views
app_name = 'registration'
urlpatterns = [
 path('', views.home, name='home'),
 path('/response',views.response,name='response')
]