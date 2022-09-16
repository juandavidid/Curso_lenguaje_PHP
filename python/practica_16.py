"""
EJERCICIO
7.Escriba un programa que pida un numero
entero mayor que 1 y que escriba si el 
numero es un primo o no.
"""
# SOLUCION


numero= int(input("Escriba un numero entero mayor que 1 : "))

if numero <=1:
    print("¡le he pedido un numero entero mayor que 1 !")
else:
    contador=0
    for i in range(1,numero+1):
        if numero % i == 0:
            contador = contador + 1
    if contador == 2:
        print(f"{numero} es primo")
    else:
        print(f"{numero} no es primo")