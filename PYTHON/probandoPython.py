age=20
name="Nico"

print(name)

print(f"Me llamo {name} y tengp {age}")

if (name=="Nico"):
    print("hombreton")    
else:
    print("no hombreton")
    
year =3000

if 2000<= year<=5000:
    print("si")
    
else:
    print("no")
    

print("A") if year>300 else print("B")

def hello(name="default" ,year=000):
    return print(f"Hello {name} and {year} years old")

hello("a", 69)