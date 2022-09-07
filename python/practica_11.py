"""

EJERCICIO 2

2.Escriba un programa que pida un numero entero mayor que cero
y que escriba sus divisores.

"""

numero=int(input("Escriba un numero entero mayor que cero: "))

if numero > 0:
    for i in range(1,numero+1):
        if numero % i == 0 :
            print(f"los divisores de {numero} son ",i)
else:
    print("¡Le he pedido un numero entero mayor que cero!")