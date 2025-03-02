from django.shortcuts import render
from django.views.generic import ListView,CreateView,UpdateView,DeleteView,DetailView,View
from django.http import HttpResponseRedirect
from .models import *
from .forms import ProductForm
from django.urls import reverse_lazy


class Home(ListView):
    template_name = "appHtmls/home.html"
    model = Product
    context_object_name = "products"
    
class AddProduct(CreateView): 
    model=Product
    form_class=ProductForm
    template_name="appHtmls/add.html"
    success_url=reverse_lazy("home")
    
class DeleteProduct(DeleteView): 
    model=Product
    template_name="appHtmls/delete.html"
    success_url=reverse_lazy("home")
    
class UpdateProduct(UpdateView): 
    model=Product
    form_class=ProductForm
    template_name="appHtmls/update.html"
    success_url=reverse_lazy("home")
    
class ProductDetail(DetailView): 
    template_name="appHtmls/detail.html"
    model=Product
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_review = self.object
        request = self.request
        favorite_id =  request.session.get("favorite_product")
        context["is_favorite"] = favorite_id == str(loaded_review.id)
        return context
    
class AddFavoriteView(View):
    # en vez de guardar un solo id , hacemos una lista y guardamos el id de los productos si no estan en la lista
    def post(self, request):
        product_id = request.POST["product_id"]
        favorite_products = request.session.get("favorite_products", [])
        
        if product_id not in favorite_products:  
            favorite_products.append(product_id)
        
        request.session["favorite_products"] = favorite_products   
        return HttpResponseRedirect("/favorites/")
    
class FilteredProducts(ListView):
    template_name="appHtmls/filtered.html"
    model=Product
    context_object_name="products"
    
    def get_queryset(self):
        request=self.request
        query=request.GET.get("product_name")
        data = Product.objects.filter(name__contains=query)
        return data

class FavoritesList(ListView):
    model = Product
    template_name = "appHtmls/favorites_list.html"
    context_object_name = "favorites"

# primero obtenemos todos los ids que estan en favorite_ids y despues devolvemos los productos filtrados segun si su id esta en la lista
    def get_queryset(self):
        favorite_ids = self.request.session.get("favorite_products", []) 
        return Product.objects.filter(id__in=favorite_ids)