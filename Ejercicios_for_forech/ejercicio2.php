<?php

/*

EJERCICIO 2

2.Escriba un programa que pida un numero entero mayor que cero
y que escriba sus divisores.

*/

# SOLUCION

# Definimos variables

$numero=readline("Escriba un numero que se mayor a cero: ");

if ($numero<0){
    echo "¡le he pedido un numero entero mayor que cero!";
}else{
    for ($i=1; $i<= $numero; $i=$i+1){
        if ($numero % $i == 0){
            echo "los divisores de ". $numero." son:".$i."\n" ;
        }
        
    }
}


?>