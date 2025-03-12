from django.urls import path
from . import views
urlpatterns = [
    path('', views.HomeView.as_view(), name='home'),
    path('add/', views.AddStudentView.as_view(), name='add'),
    path('delete/<slug:slug>', views.DeleteStudentView.as_view(), name='delete'),
    path('update/<slug:slug>', views.UpdateStudentView.as_view(), name='update'),
    path('detail/<slug:slug>', views.DetailStudentView.as_view(), name='detail'),
    path('favorite/', views.AddFavoriteView.as_view(), name='favorite'),
    path('favorites/', views.FavoritesView.as_view(), name='favorites'),
]