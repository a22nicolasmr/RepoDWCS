from django.urls import path
from . import views

urlpatterns = [    
    path('', views.review),
    path('results/', views.review_results, name='review_results'),
]