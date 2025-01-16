from django.shortcuts import render, get_object_or_404
from .models import Book
from django.db.models import Avg

# Create your views here.

def index(request):
     # Obtiene todos los libros
    books = Book.objects.all().order_by("-rating")
    
    # Cuenta el número de libros
    num_books = books.count()
    
    # Calcula el promedio de las calificaciones
    avg_rating = books.aggregate(Avg("rating"))["rating__avg"]
    
    # Pasa los libros, el número de libros y el promedio de la calificación al template
    return render(request, "book_outlet/index.html", {
        "books": books,
        "num_books": num_books,
        "avg_rating": avg_rating,
    })

def book_detail(request, slug):
    # Obtén el libro o devuelve una página 404 si no se encuentra
    book = get_object_or_404(Book, slug=slug)
    return render(request, "book_outlet/book_detail.html", {
        "title": book.title,
        "author": book.author,
        "rating": book.rating,
        "is_bestselling": book.is_bestselling,
    })
    

