<?php

/*
EJERCICIO
12.Escriba un programa que pida un numero entero
mayor que cero y calcule su factorial.
*/

$numero=readline("Escriba un numero entero mayor que cero: ");
if($numero < 1 ){
    echo "¡Le he pedido un numero entero mayor que cero";
}else{
    $factorial=1;
    for($i=1;$i<=$numero;$i=$i+1){
        $factorial=$factorial*$i;
    }
    echo "El factorial de ".$numero." es ".$factorial;

}




?>