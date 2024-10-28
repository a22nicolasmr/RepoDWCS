class Car:
    #atributo statico de la clase
    description="Class car"            
    def __init__(self, color, power):
      self.color = color
      self.power = power
    def __str__(self):
     return f"Car with color {self.color} and power {self.power}"
 
    def getColor(self):
        return self.color
    
    #metodo de clase NO de objecto , por lo que no lleva self
    def getDescription():
        return Car.description

c1=Car("red",40000)
c2=Car("black",99999)

#añadimos un atributo
c1.brand="Rayo McQueen"
print(c1.brand)

#borramos una propiedad
del c2.color

#se accede como un atributo statico
print(Car.description)
print(Car.getDescription())
print(c1)