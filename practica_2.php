<?php
/*
EJERCICIO 1
 Crea un arreglo que contenga como clave los nombres de
 5 países y como valor otro arreglo con 3 ciudades que 
 pertenezcan a ese país, después utiliza un ciclo foreach, 
 para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin

*/

# SOLUCION

$pais_ciudades = array( 'colombia' => ['Bogota','Cali','Medellin'],'Argentina' => ['Bueno Aires','Salta','La plata']  );

foreach($pais_ciudades as $clave => $valor){
    #echo "<p>$clave - $valor</p>";
    #var_dump ($clave,$pais_ciudades[$clave]);
    var_dump ($clave,$valor);
}


/*
EJERCICIO 2

Escribe el código necesario para 
encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:

*/

?>