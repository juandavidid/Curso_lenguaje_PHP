# EJERICICIO

"""
4.Escriba un programa que pida dos numeros enteros y que escriba 
si el mayor es multiplo del menor.
"""

# definimos dos numeros

n1=int(input("Ingres un numero : "))
n2=int(input("Ingrese un segundo numero: "))
if n1 % n2 >= 1 and n1>n2:
    print(n1,"no es multiplo",n2)
elif n2 % n1 >= 1 and n2>n1:
    print(n2,"no es multiplo",n1)
else:
    if n1 ==n2:
        print("Ambos numeros son iguales")
    else:
         if n1 % n2 == 0:
             print(n1,"es multiplo de ", n2)
         elif (n2 % n1 == 0):
             print(n2 ,"es multiplo de ",n1)


#otra forma de hacer codigo
numero_1 = int(input("Escriba un numero: "))
numero_2 = int (input("Escriba otro numero: "))
if numero_1 >= numero_2 and numero_1 % numero_2  != 0:
    print(f"{numero_1} no es multiplo de {numero_2}.")
elif numero_1 >= numero_2 and numero_1 % numero_2 == 0:
    print(f"{numero_1} es multiplo de {numero_2}.")
elif numero_1 < numero_2 and numero_2 % numero_1 != 0 :
     print(f"{numero_2} no es multiplo de {numero_1}.")
else:
    print(f"{numero_2} es multiplo de {numero_1}.")






