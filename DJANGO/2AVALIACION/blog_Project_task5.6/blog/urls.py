from django.urls import path
from . import views

app_name = 'blog'

urlpatterns = [
    path('', views.HomeView.as_view(), name='home'),
    path('all-posts/', views.AllPosts.as_view(), name="all_posts"),
    path('post/<slug:slug>/', views.SingleDetailView.as_view(), name='detail'),
]
