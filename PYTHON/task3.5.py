def tripleCheck(lista):
    hasTriple=False
    for valor in range (0,len(lista)):
        if(valor+2<len(lista)):
            if(lista[valor]==lista[valor+1]):
                if(lista[valor+1]==lista[valor+2]):
                    hasTriple=True
    return hasTriple    
            
print(tripleCheck([ 1, 1, 1, 2, 2, 2, 1 ]))
print(tripleCheck([ 1, 1, 2, 2, 1 ]))
print(tripleCheck([ 1, 1, 2, 2, 2 ]))

def countries(listaCountries):
    for valor in listaCountries:
        print(f"The capital of {valor} is {listaCountries[valor]}")

ceu = {
    "Italy": "Rome",
    "Luxembourg": "Luxembourg",
    "Belgium": "Brussels",
    "Denmark": "Copenhagen",
    "Finland": "Helsinki",
    "France": "Paris",
    "Slovakia": "Bratislava",
    "Slovenia": "Ljubljana",
    "Germany": "Berlin",
    "Greece": "Athens",
    "Ireland": "Dublin",
    "Netherlands": "Amsterdam",
    "Portugal": "Lisbon",
    "Spain": "Madrid",
    "Sweden": "Stockholm",
    "United Kingdom": "London",
    "Cyprus": "Nicosia",
    "Lithuania": "Vilnius",
    "Czech Republic": "Prague",
    "Estonia": "Tallin",
    "Hungary": "Budapest",
    "Latvia": "Riga",
    "Malta": "Valetta",
    "Austria": "Vienna",
    "Poland": "Warsaw"
}

countries(ceu)