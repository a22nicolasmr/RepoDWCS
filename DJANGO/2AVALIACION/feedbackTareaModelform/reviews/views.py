from django.shortcuts import render
from .forms import ReviewForm

def review(request):
    if request.method == 'POST':
        form = ReviewForm(request.POST)
        
        if form.is_valid():
            # Guardamos el formulario directamente en la base de datos
            form.save()
            # Redirigir o mostrar la página de resultados
            return render(request, 'reviewsHtmls/review_results.html', {'form': form})
    
    else:
        form = ReviewForm()

    return render(request, 'reviewsHtmls/review.html', {'form': form})
