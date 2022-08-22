<?php

/*
EJERCICIO 2

2.Escriba un programa que pida dos numeros y que conteste cual es el menor y cual
mayor o que escriba que son iguales.

*/

// definimos dos variables

$numero_uno = 4;
$numero_dos = 3 ;

if ($numero_uno == $numero_dos){
    echo "Los dos numeros son igules";

}else{
    if ($numero_uno > $numero_dos){
        echo "El numero ". $numero_uno ." es mayor<br/>";
        echo "El numero ". $numero_dos." es menor";
    }else{
        echo "El numero". $numero_dos ."es mayor<br/>";
        echo "El numero". $numero_uno."es menor";
    }
}






?>