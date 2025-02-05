from django.shortcuts import render
from .forms import ReviewForm
from django.views import View
from django.http import HttpResponseRedirect


class ReviewView(View):
    def get(self,request):
        form=ReviewForm()
        
        return render(request,"reviewsHtmls/review.html",{
            "form":form
        })
    def post(self,request):
        form=ReviewForm(request.POST)
        
        if form.is_valid():
          form.save()
          return render(request, 'reviewsHtmls/review_results.html', {'form': form})
      
        return render(request,"reviewsHtmls/review.html",{
            "form":form
        })