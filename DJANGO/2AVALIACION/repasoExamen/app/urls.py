from django.urls import path, include
from . import views

urlpatterns = [
 path('', views.HomeView.as_view(),name="home"),
 path('add/', views.AddProduct.as_view(),name="add"),
 path("product/<slug:slug>", views.ProductDetail.as_view(), name="product-detail"),
 path("product/update/<slug:slug>", views.UpdateProduct.as_view(), name="update"),
 path("product/delete/<slug:slug>", views.DeleteProduct.as_view(), name="delete"),
 path("reviews/favoriteList", views.AddFavoriteView.as_view(), name="favorite"),
 path("reviews/favorites", views.FavoriteProducts.as_view(), name="favorites"),
 path("reviews/filtered", views.FilteredProducts.as_view(), name="filtered"),
]
