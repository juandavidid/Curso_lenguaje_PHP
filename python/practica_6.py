
# EJERCICIO

"""
6.Escriba un programa que pida un año y que
escriba si es bisiesto o no. Se recuerda
que los años bisiestos son multiplos de 4
pero los multiplos de 100 no los son, aunque
los multiplos  de 400 si
"""

#  SOLUCION

# declaracion de variables

año=int(input("Ingrese un año: "))

coeficiente_100= año/100
coeficiente_4 = año/4

print(type(coeficiente_100))
print(type(coeficiente_4))

print(type(año))

if  type(coeficiente_100)!= type(año) and  type(coeficiente_4)!= type(año) :
    print("No es año Bisiesto")
else:
    if año % 4 == 0 or año % 400 == 0:
        print("Es año bisiestos")
