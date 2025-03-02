from django.shortcuts import render
from django.views.generic import ListView,DetailView,CreateView,UpdateView,DeleteView,View
from .models import *
from .forms import AddProductForm
from django.urls import reverse_lazy
from django.http import HttpResponseRedirect
# Create your views here.

class ProductList(ListView):
    template_name="appHtmls/product_list.html"
    model=Product
    context_object_name="products"
    
    def get_queryset(self):
        base_query = super().get_queryset()
        data = base_query.filter(price__gt=4)
        return data
    
class Home(ListView):
    template_name="appHtmls/home.html"
    model=Product
    context_object_name="products"
    
class Detail(DetailView):
    template_name = "appHtmls/detail.html"
    model = Product
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_product = self.object
        request = self.request
        favorite_id = request.session.get("favorite_product")  
        context["is_favorite"] = favorite_id == str(loaded_product.id)
        return context
    
class AddProduct(CreateView):
    model = Product
    form_class = AddProductForm
    template_name = "appHtmls/add.html"
    success_url = reverse_lazy("home")
    
class UpdateProduct(UpdateView):
    model=Product
    form_class = AddProductForm
    template_name = "appHtmls/update.html"
    success_url = reverse_lazy("home")
    
class DeleteProduct(DeleteView):
    model=Product
    template_name = "appHtmls/delete.html"
    success_url = reverse_lazy("home")
    
class AddFavoriteProduct(View):
    def post(self, request):
        product_id = request.POST["product_id"]
        request.session["favorite_product"] = product_id 
        return HttpResponseRedirect(reverse_lazy("home"))
    
    
class SearchProducts(ListView):
    model=Product
    template_name="appHtmls/search.html"
    context_object_name="products"
    
    def get_queryset(self):
        query = self.request.GET.get("q")
        if query:
            return Product.objects.filter(name__contains=query)
        return Product.objects.all() 