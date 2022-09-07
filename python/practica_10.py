"""
EJERCICIO 1
  1.Escriba un programa que pida dos numeros enteros y escriba 
    que numeros son pares y cuales impares desde el primero
    hasta el segundo.
"""

n1=int(input("Escriba un numero entero:"))
n2=int(input(f"Escriba un numero entero mayor o igual que {n1}:"))

if n2>=n1:
    for i in range(n1,n2+1):
        if ( i%2 == 0):
            print("El numero",i,"par")
        else:
             print("El numero",i,"impar")
else:
    print("¡Le he pedido un numero entero mayor o igual ")

