"""

EJERCICIO

4.Escriba un programa que pregunte cuantos numeros se van
a introducir,pida esos numeros,y muestre un mensaje cada
vez que un numero no sea mayor que el anterior.

"""

# SOLUCION


print("MAYORES QUE EL ANTERIOR")

valores = int(input("¿Cunatos valores va a introducir"))

if valores < 1 :
    print("¡Imposible!")
else:
    anterior = int (input("Escriba un numero: "))

    for i in range(valores-1): # rango va de 0 a 3
        numero = int(input(f"Escriba un numero mas grande que {anterior}: "))
        if numero <= anterior:
            print(f"¡{numero} no es mayor que {anterior}!")
        anterior = numero   
    print("Gracias por su colaboracion.")
