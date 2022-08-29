# EJERICICIO


"""
1.Escriba un programa que pregunte una y otra vez
si desea continuar con el programa, siempre 
que se conteste exactamente si (en minusculas y con tilde).

"""
# SOLUCION

# definicion de variables



while(True):
    respuestas= input("¿Desea continuar con el programa?: ")
    if (respuestas=='si'):
        continue
    else:
        print("¡Hasta la vista !")
        break

# Otra forma de hacer el codigo

respuesta=input("¿Desea continuar el programa ?: ")
while respuesta =='si': # se vuelve un verdadero
    respuesta= input("¿Desea continuar el programa?:")
print("¡Hastala vista!")
