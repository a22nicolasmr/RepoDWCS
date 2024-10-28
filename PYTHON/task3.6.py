class Calculator:
    numberOfObjects=0
    
    def __init__(self,num1=None,num2=None):
      self.num1 = num1
      self.num2 = num2
      Calculator.numberOfObjects+=1
      
      if self.num1 is not None and type(self.num1)!=int and self.num2 is not None and type(self.num2) !=int :
        raise Exception("Only numbers accepted")
    
    def __toString__(self):
        return f"The numbers are {self.num1} and {self.num2} and there are {Calculator.numberOfObjects}"
    
    def suma(self):
     return self.num1 + self.num2
 


try:
    firstCalcule=Calculator()
    firstCalcule.num1=5
    firstCalcule.num2=10

    # print(firstCalcule.suma())
    print(f"{firstCalcule.num1} and {firstCalcule.num2}")

    secondCalcule=Calculator(4,20)
    print(secondCalcule.__toString__())

    print(firstCalcule.suma())
    print(secondCalcule.suma())
except Exception as error:
    print(error)