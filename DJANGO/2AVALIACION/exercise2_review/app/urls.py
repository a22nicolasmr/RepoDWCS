from django.urls import path
from . import views

urlpatterns = [
 path('products/', views.ProductList.as_view(), name='product_list'),
 path('', views.Home.as_view(), name='home'),
 path("product/<slug:slug>", views.Detail.as_view(), name="product-detail"),
 path("product/<slug:slug>/update", views.UpdateProduct.as_view(), name="updateProduct"),
 path("product/<slug:slug>/delete", views.DeleteProduct.as_view(), name="deleteProduct"),
 path("add/", views.AddProduct.as_view(), name="add-product"),
 path("product/favorite/", views.AddFavoriteProduct.as_view(), name="product-favorite"),
 path("search/", views.SearchProducts.as_view(), name="search"),
]
