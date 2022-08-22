#  EJERCICIO 1

"""
1.Escriba un programa que pida dos numeros enteros y que calcule su division 
escribiendo si la division es exacta o no.

"""


# Declaramos dos variables

numero_uno=5
numero_dos=0
if numero_dos == 0:
    print("No se puede dividir por cero")
elif numero_uno % numero_dos == 0 :
    print("La division es exacta")
elif numero_uno % numero_dos == 1:
    print("La division no es exacta")

# otra forma del codigo

dividiendo = 5
divisor = 2

if divisor == 0:
    print("No se puede dividir por cero")
else:
    if dividiendo % divisor == 0:
        print(f"la division es exacta. Cociente : { dividiendo // divisor} ")
    else:
        print(f"La division no es exacta. Cociente :{dividiendo // divisor }"
         f"Resto: {dividiendo % divisor}" 
        
        )


