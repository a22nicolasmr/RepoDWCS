from django.shortcuts import render , get_object_or_404
from .models import Post
from django.views import View
from django.http import HttpResponseRedirect
from django.views.generic import ListView,DetailView
from .forms import CommentForm
from django.urls import reverse


class HomeView(ListView):
    template_name="blogHtmls/index.html"
    model=Post
    context_object_name="posts"
    
    def get_queryset(self):
        return Post.objects.all().order_by('-date')[:3]
    
    # def home(request):
    #     posts=Post.objects.order_by('date')[:3]
    #     return render(request,'blogHtmls/index.html', {'posts':posts})

class SingleDetailView(View):
    def is_stored_post(self,request,post_id):
        stored_posts=request.session.get("stored_posts")
        if stored_posts is None:
            is_save_for_later=False
        else:
            is_save_for_later=post_id in stored_posts
        return is_save_for_later
    
    template_name="blogHtmls/detail.html"
    model=Post
    
    def get(self,request,slug):
        post=Post.objects.get(slug=slug)
        context={
            "post":post,
            "post_tags":post.tags.all(),
            "comment_form":CommentForm(),
            "comments":post.comments.all().order_by("id"),
            "saved_for_later":self.is_stored_post(request,post.id)
        }
        return render(request,"blogHtmls/detail.html",context)
    
    def post(self,request,slug):
        comment_form=CommentForm(request.POST)
        post=Post.objects.get(slug=slug)
        
        if comment_form.is_valid():
            comment=comment_form.save(commit=False)
            comment.post=post
            comment_form.save()
            
            return HttpResponseRedirect(reverse("blog:detail",args=[slug]))
        
        context={
            "post":post,
            "post_tags":post.tags.all(),
            "comment_form":CommentForm(),
            "comments":post.comments.all().order_by("id")
        }
        return render(request,"blogHtmls/detail.html",context)
        
    
    
    # de la forma de abajo es como deberia ser pero como tenemos los tags relacionados , podemos acceder a ellos 
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     context["post_tags"] = self.object.tags.all()
    #     return context
    
    # def detail(request, slug):
    #     post = get_object_or_404(Post, slug=slug)
    #     return render(request, 'blogHtmls/detail.html', {'post': post})


class AllPosts(ListView):
    template_name="blogHtmls/all_posts.html"
    model=Post
    context_object_name="posts"
    
    def get_queryset(self):
        return Post.objects.all().order_by('-date')
    # def all_posts(request):
    #     posts=Post.objects.all()
    #     return render(request,'blogHtmls/all_posts.html',{"posts":posts})
    
class ReadLaterView(View):
    def get(self,request):
        stored_posts=request.session.get("stored_posts")
        context={}
        if stored_posts is None or len(stored_posts)==0:
            context["posts"]=[]
            context["has_posts"]=False
        else:
            posts=Post.objects.filter(id__in=stored_posts)
            context["posts"]=[]
            context["has_posts"]=True
        
        return render(request, "blogHtmls/stored-posts.html",context)
 
    def post(self,request):
        stored_posts=request.session.get("stored_posts")
        if stored_posts is None:
            stored_posts=[]
            
        post_id= int(request.POST["post_id"])
        
        if post_id not in stored_posts:
            stored_posts.append(post_id)
        else:
            stored_posts.remove(post_id)
            
        request.session["stored_posts"]=stored_posts
        return HttpResponseRedirect("/stored-posts")