'''
EJERCICIO

5.Escriba un programa que pregunte cuantos numeros se van
a introducir, pida esos numeros y escriba cuantos negativos
ha introducido.

'''

# SOLUCION

cantidad=int(input("¿Cuantos valores va a introduccir? "))

if(cantidad < 0):
    print("¡Imposible!")
else:
    sumadora=0
    for i in range(1,cantidad+1):
        numero=int(input(f"Escriba el numero {i}: "))
        if numero < 0:
            sumadora=sumadora+1
    if sumadora == 0:
        print("No ha escrito ningun numero negativo")
    else:
        print(f"Ha escrito {sumadora} numero negativo")


    