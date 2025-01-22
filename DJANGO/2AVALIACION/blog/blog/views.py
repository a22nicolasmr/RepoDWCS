from django.shortcuts import render , get_object_or_404
from .models import Post

# Create your views here.
def home(request):
    posts=Post.objects.order_by('date')[:3]
    return render(request,'blogHtmls/index.html', {'posts':posts})

def detail(request, slug):
    post = get_object_or_404(Post, slug=slug)
    return render(request, 'blogHtmls/detail.html', {'post': post})

def all_posts(request):
    posts=Post.objects.all()
    return render(request,'blogHtmls/all_blogs.html',{"posts":posts})