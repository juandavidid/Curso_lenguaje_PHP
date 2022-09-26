<?php


/*
EJERCICIO

10.Escriba un programa que pida dos numeros enteros
y escriba la suma de todos los enteros desde el primer
numero hasta el segundo.

*/

// SOLUCION

//declarar varariables

$numero_inicio=readline("Escriba un numero entero positivo : ");
if($numero_inicio < 1){
    echo "¡le he pedido un numero entero positivo!";
}else {
    $numero_final=readline("Escriba un numero entero mayor que " .$numero_inicio." :");
    if($numero_inicio>= $numero_final  ){
        echo "¡le he pedido un numero entero mayor ",$numero_inicio,"\n";
        while(True){
            $numero_final=readline("Escriba un numero entero mayor que " .$numero_inicio." :");
            break;
        }
    }
    $sumar=0;
    for ($i=$numero_inicio; $i<=$numero_final ; $i=$i+1){
        $sumar=$sumar+$i;
    }
    echo "La suma de ".$numero_inicio." hasta ".$numero_final." es ".$sumar;

}








?>