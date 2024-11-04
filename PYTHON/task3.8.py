class Alien:
    numberOfObjects=0
    def __init__(self, name):
      self.name = name
      Alien.numberOfObjects+=1
      
    def getNumberOfAliens():
     return Alien.numberOfObjects
 
alien1=Alien("alien1")
print(Alien.getNumberOfAliens())

alien2=Alien("alien2")
print(Alien.getNumberOfAliens())

alien3=Alien("alien3")
print(Alien.getNumberOfAliens())