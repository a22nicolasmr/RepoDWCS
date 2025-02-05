from reviews.models import Review,Student
from django.shortcuts import render
from django.views import View
from django.views.generic.base import TemplateView
from django.views.generic import ListView,DetailView
from django.views.generic.edit import FormView,CreateView

from .forms import ReviewForm,StudentForm

# Create your views here.

class ReviewView(CreateView):
    model=Review
    form_class=ReviewForm
    template_name="reviews/review.html"
    success_url="/thank-you"
    
    def form_valid(self, form):
        form.save()
        return super().form_valid(form)
    
    # La vista FormView hace todo lo del formulario automaticamente sin tener que indica nada , es mas simple y automatico
    
    # def get(self, request):
    #     form = ReviewForm()

    #     return render(request, "reviews/review.html", {
    #         "form": form
    #     })

    # def post(self, request):
    #     form = ReviewForm(request.POST)

    #     if form.is_valid():
    #         form.save()
    #         return HttpResponseRedirect("/thank-you")

    #     return render(request, "reviews/review.html", {
    #         "form": form
    #     })


class ThankYouView(TemplateView):
    template_name="reviews/thank_you.html"
    
    #este metodo sirve para pasar datos entre pantallas
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["message"] = "This works"
        return context
    

class ReviewsListView(ListView):
    template_name= "reviews/review_list.html"
    model=Review
    context_object_name= "reviews"
    
    #Con ListView , listamos automaticamente todos los objectos de una clase sin necesidad de hacer lo de abajo
    
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     reviews=Review.objects.all()
    #     context["reviews"] = reviews
    #     return context

class SingleReviewView(DetailView):
    template_name= "reviews/single_review.html"
    model=Review
    
    #Aqui pasa lo mismo que arriba pero en vez de para obtener todos los objetos, solo sirve para obtener uno
    
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     review_id=kwargs["id"]
    #     selected_review=Review.objects.get(pk=review_id)
    #     context["selected_review"] = selected_review
    #     return context
    
    
class AllStudentsView(ListView):
    template_name= "reviews/all_students.html"
    model=Student
    context_object_name= "all_students" 
    
class StudentFormView(ListView):
    template_name="reviews/student.html"
    model=Student
    form_class=StudentForm
    context_object_name= "student"
    
    success_url="/all_students"
    
    def form_valid(self, form):
        form.save()
        return super().form_valid(form)