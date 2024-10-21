# age=20
# name="Nico"

# print(name)

# print(f"Me llamo {name} y tengp {age}")

# if (name=="Nico"):
#     print("hombreton")    
# else:
#     print("no hombreton")
    
# year =3000

# if 2000<= year<=5000:
#     print("si")
    
# else:
#     print("no")
    

# print("A") if year>300 else print("B")

# def hello(name="default" ,year=000):
#     return print(f"Hello {name} and {year} years old")

# hello("a", 69)

# #copiar carpeta docker no home
# #vamos a la carpeta , abrimos en terminal y escribimos localhost
# #despois facer  ./permisos.sh

# dognames=["name3","name4","name5","name6","name7"]
# dognames.insert(0,"nombrePrueba")
# del(dognames[0])
# print(dognames)

# for dog in dognames:
#     print(dog)
    

# for x in range(1,10):
#     print(x)

# dogs={"Fido":8,"sally":5}

# print(dogs)

# del(dogs["Fido"])

# dogs["Sarah"]=6

# print(dogs)

# words=["w1","w2","w3"]

# words2=["w11","w22","w33"]
# words3={}

# length=len(words)

# for num in range(0,length):
#     coolDictionary=[words[num]],words2[num]

# for x in coolDictionary:
#     print(f"{x} : {coolDictionary[x]}")
    
class Dog:
    def bark(self):
        print ("guau")
        
    def __init__(self,name="",age=0):
        self.name=name
        self.age=age
        
mydog=Dog("nombrePerro",12)
mydog.bark()

print(mydog)

