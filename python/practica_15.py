"""
EJERCICIO

6.Escriba un programa que pregunte cuantos numeros se van
a introducir,pida esos numeros, y diga final cuantos
han sido pares y cuantos impares.

"""

# Solucion

cantidad=int(input("¿Cuantos valores va a introducir ? "))
if cantidad < 0:
    print("¡Imposible!")
else:
    pares=0
    impares=0
    for i in range(1,cantidad+1):
        numero=int(input(f"Escriba el valor {i}: "))
        if numero % 2 == 0 :
            pares=pares+1
        else:
            impares=impares+1
    print(f"Ha escrito {pares} numeros pares y {impares} numeros impares")
    print("Gracias por su colaboracion")
