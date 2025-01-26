from django.db import models
from django.core.validators import MinValueValidator

# Create your models here.

class MuscularGroup(models.Model):
    name=models.CharField(max_length=100)
    
    def __str__(self):
        return self.name
    
# ------------------------------------------------- 
    
class Serie(models.Model):
    repetitions=models.IntegerField([MinValueValidator(1)])
    weight=models.IntegerField([MinValueValidator(1)])
    
    def __str__(self):
        return f"{self.repetitions} {self.weight}"
    
# -------------------------------------------------

class Exercise(models.Model):
    name=models.CharField(max_length=100)
    muscular_group=models.ManyToManyField(MuscularGroup, related_name="exercises")
    series=models.ManyToManyField(Serie, related_name="series")
    
    def __str__(self):
        return self.name
    
# -------------------------------------------------
        
class Stats(models.Model):
    total_reps=models.IntegerField()
    total_weight=models.IntegerField()
    total_exercises=models.IntegerField()
    total_routines=models.IntegerField()
    
    def __str__(self):
        return f"{self.total_reps} {self.total_weight} {self.total_exercises} {self.total_routines}" 
# -------------------------------------------------

class User(models.Model):
    name=models.CharField(max_length=100)
    last_name=models.CharField(max_length=100)
    userName=models.CharField(max_length=100)
    # password=models.CharField(max_length=100)
    email=models.EmailField(max_length=254, unique=True)
    stats = models.OneToOneField(Stats, on_delete=models.CASCADE, null=True)
    
    def __str__(self):
        return f"{self.name} {self.last_name} {self.userName} {self.email}" 
    
# -------------------------------------------------
    
class Routine(models.Model):
    name=models.CharField(max_length=100)
    notes=models.TextField()
    date=models.DateTimeField(auto_now=True)
    exercises=models.ManyToManyField(Exercise, related_name="exercises")
    user = models.ForeignKey(User, on_delete=models.CASCADE, null=True)
    def __str__(self):
        return f"{self.name} {self.notes}"
    

