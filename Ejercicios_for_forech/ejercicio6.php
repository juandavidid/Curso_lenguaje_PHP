<?php

/*
EJERCICIO

6.Escriba un programa que pregunte cuantos numeros se van
a introducir,pida esos numeros, y diga final cuantos
han sido pares y cuantos impares.

*/

# SOLUCION

$cantidad=readline("¿Cuantos valores va a introducir? ");
if($cantidad < 0){
    echo "¡Imposible!";
} else{
    $pares=0;
    $impares=0;
    for ($i=1 ; $i <=$cantidad ; $i=$i+1){
        $numero=readline("Escriba el valor ".$i.":");
        if($numero % 2==0){
            $pares=$pares+1;
        }else{
            $impares=$impares+1;
        }
    }
    echo "Ha escrito ".$pares." numeros pares y ".$impares." numeros impares";
}





?>