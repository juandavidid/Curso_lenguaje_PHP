<?php

/*

EJERCICIO
7.Escriba un programa que pida un numero
entero mayor que 1 y que escriba si el 
numero es un primo o no.
*/

$numero=readline("Ingrese un numero mayor que 1 : ");
if($numero < 0){
    echo "¡Le he pedido un numero entero mayor que 1!";
}else{
    $contador = 0;
    for ( $i=1; $i<=$numero ; $i=$i+1 ){
        if($numero % $i == 0){
            $contador=$contador +1;  
        }
    }
    if ($contador == 2){
        echo $numero." es primo";
    }else{
        echo $numero." no es primo";
    }
}







?>