from django.urls import path
from . import views

app_name = 'blog'

urlpatterns = [
    path('', views.home, name='home'),
    path('', views.all_posts, name="all_posts"),
    path('post/<slug:slug>/', views.detail, name='detail'),
]
