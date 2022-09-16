"""
EJERCICIO

8.Escriba un programa que pregunte cuantos numeros se van a introducir,
pida esos numeros (que puedan ser decimales) y calcule su suma.
"""

cantidad_numeros=int(input("¿Cuantos valores a introducir? : "))
if(cantidad_numeros <0):
    print("¡Imposible!")
else:
    suma=0
    for i in range(1,cantidad_numeros+1):
        numero=float(input(f"Escriba el numero {i} :"))
        suma=suma+numero
    print(f"La suma de los numeros que ha escrito es {suma} ")