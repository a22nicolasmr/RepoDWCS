
def potencia(base,exponente):
    resultado=1
    if(type(base)==int and type(exponente)==int):
        for x in range (exponente):
            #resultado=resultado*base
            resultado*=base
    else:
        raise Exception("only numbers accepted")
    
    return resultado

try:
    print(potencia(6,2))
    print(potencia(6,"2"))
except Exception as error:
    print(error)