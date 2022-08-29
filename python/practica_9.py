# EJERICICIOS 


"""
4.Escriba un programa que simule una hucha.
El programa solicitara primero una cantidad,
que sera la cantidad de dinero que queremos
ahorrar.A continuacion, el programa solicitara
una y otra vez las cantidades que se iran ahorrando,
hasta que el total ahorrado iguale o supere al objetivo.
el programa no comprobara que las cantidades sean positivas.

"""


# declaracion de variables

'''

cantidad_ahorrar=int(input("¿Cuantos euros quiere ahorrar: "))
cantidad_objetivo=0
while(cantidad_objetivo <= cantidad_ahorrar):
    cantidad_ingreso=int(input("¿Cuanto euros quiere meter en la hucha?: "))
    cantidad_objetivo=cantidad_objetivo+cantidad_ingreso
print("¡Objetivo conseguido! Ha ahorrado usted",cantidad_objetivo,"euros")

'''

# otra forma de hacer codigo
objetivo=float(input("Cuanto euros quiere ahorrar?:"))
ahorrado=0.0
while objetivo > ahorrado:
    #ahorrado += float(input("¿Cuántos euros quiere meter en la hucha?: "))
    ahorrado = ahorrado=float(input("¿Cuantos euros quiere meter en la hucha?"))+ahorrado
print(f"¡Objetivo conseguido! Ha ahorrado usted {ahorrado} euros.")
