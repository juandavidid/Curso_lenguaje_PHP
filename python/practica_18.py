"""

EJERCICIO 

Escriba un programa que pregunte cuantos numeros
se van a introducir, pida esos numeros, y escriba
el mayor, el menor y la media aritmetica.

Se recuerda que la media aritmetica de un conjunto
de valores es la suma de esos valores dividida 
por la cantidad de valores

"""

# SOLUCION
"""
cantidad=int(input("¿Cuantos valores va a introducir?"))
if cantidad < 1 :
    pass
else:
    suma=0
    lista=[]
    for i in range(1,cantidad+1):
        numero=int(input(f"Escriba el numero{i}: "))
        suma=suma+numero
        lista.append(numero)
    
    for j in lista:
        pass
    media_aritmetica=suma/cantidad
    print(f"la media de los numeros introducidos es {media_aritmetica}")
    print(lista)

"""

numero = int(input("¿Cuántos valores va a introducir? "))
if (numero <= 0):
       print("¡Imposible!")
else:
        valor = float(input("Escriba el número 1: "))
        minimo = maximo = suma = valor     #  minimo =1  maximo=1 suma=1 valor=1 
        for i in range(2, numero + 1):
            valor = float(input(f"Escriba el número {i}: ")) # valor= 2 / valor=3
            suma = suma + valor   # = 1+2   / 3+3
            if valor < minimo:
                minimo = valor
            if valor > maximo:
                maximo = valor 
        print(f"El número más pequeño de los introducidos es {minimo}")
        print(f"El número más grande de los introducidos es {maximo}")
        print(f"La media de los números introducidos es {suma / numero}")


