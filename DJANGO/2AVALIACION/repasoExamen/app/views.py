from django.shortcuts import render
from django.views.generic import ListView,CreateView,DetailView,UpdateView,DeleteView,View
from .models import *
from django.urls import reverse_lazy
from .forms import AddProductForm
from django.http import HttpResponseRedirect
# Create your views here.

class HomeView(ListView):
    template_name="appHtmls/home.html"
    model=Product
    context_object_name="products"
    
class AddProduct(CreateView):
    model=Product
    template_name="appHtmls/add.html"
    form_class=AddProductForm
    success_url=reverse_lazy("home")
    
class ProductDetail(DetailView):
    template_name="appHtmls/detail.html"
    model=Product
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_product = self.object
        request = self.request
        favorite_id = request.session.get("favorite_product")
        context["is_favorite"] = favorite_id == str(loaded_product.id)
        return context
    
class UpdateProduct(UpdateView):
    model=Product
    template_name="appHtmls/update.html"
    form_class=AddProductForm
    success_url=reverse_lazy("home")
    
class DeleteProduct(DeleteView):
    model=Product
    template_name="appHtmls/delete.html"
    success_url=reverse_lazy("home")
    
class AddFavoriteView(View):
    def post(self, request):
        favoriteProducts=[]
        product_id = request.POST["product_id"]
        favoriteProducts.append(product_id)
        request.session["favorite_product"] = product_id
        request.session["favorite_products"]=favoriteProducts
        return HttpResponseRedirect(reverse_lazy('home'))

class FavoriteProducts(ListView):
    model=Product
    template_name="appHtmls/favoriteList.html"
    
    # con get_context_data cogemos las cosas de la sesion pero como solo tenemos los ids guardados en la sesion de favoritos pues tenemos que filtrar los productos que tengan esos mismos ids
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        request = self.request
        favorite_products_ids=request.session.get("favorite_products")
        favorite_products=Product.objects.filter(id__in=favorite_products_ids)
        context["favorite_products"] = favorite_products
        return context
        
class FilteredProducts(ListView):
    model=Product
    template_name="appHtmls/filtered.html"
    
    def get_context_data(self, **kwargs) :
        context = super().get_context_data(**kwargs)
        query=self.request.GET.get("filtro")
        print(query)
        if query:
            filtered_products=Product.objects.filter(name__contains=query)
            context["filtered_products"] = filtered_products
        return context
    