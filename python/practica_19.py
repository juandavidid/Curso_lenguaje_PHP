"""
EJERCICIO
12.Escriba un programa que pida un numero entero
mayor que cero y calcule su factorial.
"""

# SOLUCION

numero=int(input("Escriba un numero mayor que cero "))
if(numero < 1):
    print("¡Le he pedido un numero entero mayor que cero!")
else:
    factorial=1
    for i in range(1,numero+1):
        factorial=factorial*i
    print(f"El factorial de {numero} es {factorial}")



