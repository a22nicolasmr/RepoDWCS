import datetime
class Person:
    def __init__(self, name, age,telephone):
      self.name = name
      self.age = age
      self.telephone=telephone
    
    def __str__(self):
     return f"\nName= {self.name} Age= {self.age} Telephone= {self.telephone}"
   
class Product:
  def __init__(self, name, description,price,image):
    self.name = name
    self.description = description
    self.price = price
    self.image = image
    
  def __str__(self):
     return f"\nName= {self.name} Description= {self.description} Price= {self.price} Image= {self.image}"
  
  def getPrice(self):
   return self.price
   
class Order:
  def __init__(self, date, productList:Product,client:Person):
    self.date = date
    self.productList = productList
    self.client =client
    
  def getTotal(self):
   totalPrice=0
   for item in self.productList:
    totalPrice=totalPrice+item.getPrice()
   return totalPrice
 
  def __str__(self):
   productList=",".join([str(product) for product in self.productList])
   return f"\nDate= {self.date} Product List= {productList} Person= {self.client}"

person1=Person("person1","person1@gmail.com",111111111)

product1=Product("product1","product1 description1",3,"image1")

product2=Product("product2","product2 description2",4,"image2")

product3=Product("product3","product3 description3",7,"image3")

productList=[product1,product2,product3]

order=Order(datetime.datetime.now(),productList,person1)

print(order)