from django.urls import path
from . import views

urlpatterns = [
    path('', views.Home.as_view(), name='home'),
    path('home', views.Home.as_view(), name='home'),
    path('add', views.AddProduct.as_view(), name='add'),
    path("<slug:slug>/delete", views.DeleteProduct.as_view(), name="delete"),
    path("<slug:slug>/update", views.UpdateProduct.as_view(), name="update"),
    path("<slug:slug>/detail", views.ProductDetail.as_view(), name="detail"),
    path("products/favorite", views.AddFavoriteView.as_view(), name="favorite"),
    path("products/filtered", views.FilteredProducts.as_view(), name="filtered"),
    path("favorites/", views.FavoritesList.as_view(), name="favorites"),
]
