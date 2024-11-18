from django.shortcuts import render , get_object_or_404
from .models import Blogs


def all_blogs(request):
    blogs=Blogs.objects.order_by("-date")[:3]
    #cuando hacemos el count de los blogs , solo nos contara como maximo el numero de blogs que tenemos aqui puesto
    #[:3] sirve para que solo se muestran 3 blogs
    return render(request,'blogHtmls/all_blogs.html',{"blogs":blogs})

def detail(request,blog_id):
    #con esto de abajo estamos haciendo un select de un blog por su id
    blog = get_object_or_404(Blogs,pk=blog_id)
    return render(request,'blogHtmls/detail.html',{'blog':blog})