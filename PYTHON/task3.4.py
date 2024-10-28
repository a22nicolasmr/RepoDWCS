def calcularFactorial(numero):
    factorial = 1
    if type(numero) == int:
        if numero >= 0:
            for x in range(1, numero + 1):
                factorial *= x
            return factorial
        else:
            raise Exception("Only numbers greater than or equal to 0 are accepted")
    else:
        raise Exception("Only integer numbers are accepted")

try:
    print(calcularFactorial(5))    # 120
    print(calcularFactorial(0))    # 1
    print(calcularFactorial("s"))  # Raises Exception
except Exception as error:
    print(error)

