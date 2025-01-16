from django.db import models

# Create your models here.
class Project(models.Model):
    title = models.CharField(max_length=100)
    description = models.CharField(max_length=250)
    image=models.ImageField(upload_to='portfolio/images/') #directorio para guardar las imagenes
    url=models.URLField(blank=True) #campos opcionales blank=true
    
#cuando creamos una nueva tabla aqui , tenemos que migrar el proyecto para indicar que tenemos una nueva tabla

    def __str__(self):
        return self.title 
