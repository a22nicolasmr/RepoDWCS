from django.shortcuts import render
from django.http import HttpResponseRedirect
from .forms import ReviewForm
from .models import Review
from django.views import View

class ReviewView(View):
    def get(self,request):
        form=ReviewForm()

        return render(request,"reviewsHtmls/review.html",{
            "form":form
        })
    def get(self,request):
        form=ReviewForm(request.POST)

        if form.is_valid():
            form.save()
            return HttpResponseRedirect("/thank-you")

# Create your views here.
# def review(request):
#     if request.method == 'POST':
#         existing_data=Review.objects.get(pk=1)
#         form=ReviewForm(request.POST,instance=existing_data)
        
#         if form.is_valid():
            
#             # review= Review(
#             #     user_name=form.cleaned_data['user_name'],
#             #     view_text=form.cleaned_data['review_text'],
#             #     rating=form.cleaned_data['rating']
#             # )
#             # review.save()
#             form.save()
#             return HttpResponseRedirect("/thank-you")
        
#     else: 
#         form=ReviewForm()
#     # Enviamos o formulario a plantilla review
#     # Se o usuario enviou datos, ese formulario vai ter os datos
#     # Si se carga a páxina por primeia vez ese fomulario está valeiro
#     return render(request,"reviewsHtmls/review.html",{
#         "form":form
#     })

def thank_you(request):
    return render(request,"reviewsHtmls/thank_you.html")