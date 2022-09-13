"""

EJERCICIO 3

3 Escriba un programa que pregunte cuantos numeros se van 
a introducir, pída esos numeros, y muestre un mensaje 
cada vez que un numero no sea mayor que el primero.

"""

# SOLUCION

cantidad_numeros=int(input("¿Cuantos valores va a introducir: "))

if cantidad_numeros < 0:
    print("¡Imposible!")
else:
    numeros_ingresados=int(input("Escriba un numero: "))
    for i in range(1,cantidad_numeros):
        numeros_mas_grande=int(input(f"Escriba un numero mas grande que{numeros_ingresados}"))
        if numeros_ingresados > numeros_mas_grande:
            while numeros_ingresados > numeros_mas_grande:
                print(f"¡{numeros_mas_grande}no es mayor que {numeros_ingresados}!")
                numeros_mas_grande=int(input(f"Escriba un numero mas grande que{numeros_ingresados}"))
            continue

    print("Gracias por su colaboracion")