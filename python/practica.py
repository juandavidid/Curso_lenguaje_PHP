'''
EJERCICIO 1
 Crea un arreglo que contenga como clave los nombres de
 5 países y como valor otro arreglo con 3 ciudades que 
 pertenezcan a ese país, después utiliza un ciclo foreach, 
 para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin

'''

# SOLUCION

pais_ciudad={'Colombia':['Bogota','Cali','Medellin'],'Argentina':['Buenos Aires','La plata','Salta']}

for clave in pais_ciudad:
    print (clave,pais_ciudad[clave])







