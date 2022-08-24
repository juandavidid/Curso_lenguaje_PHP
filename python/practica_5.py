# EJERCICIO

"""
5.5.Escriba un programa que pida tres numeros y que escriba si 
son los tres iguales,si hay dos iguales o si son los tres
distintos
"""

# SOLUCION

#Declaramos las variables

n1=int(input("Ingrese primer numero: "))
n2=int(input("Ingrese segunso numero: "))
n3=int(input("Ingrese tercer numero: "))

if n1 !=  n2 != n3:
    print("Ambos numeros son diferentes")
else:
    if n1 == n2 and n1!=n3:
        print("Los numeros",n1,"y",n2,"son iguales")
    elif n1== n3 and n1!=n2:
         print("Los numeros",n1,"y",n3,"son iguales")
    elif n2==n3 and n2 != n1:
         print("Los numeros",n2,"y",n3,"ambos son iguales")
    else:
        print("Ambos numeros son iguales")
    
