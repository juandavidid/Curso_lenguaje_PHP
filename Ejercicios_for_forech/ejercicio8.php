<?php

/*

EJERCICIO

8.Escriba un programa que pregunte cuantos numeros se van a introducir,
pida esos numeros (que puedan ser decimales) y calcule su suma.

*/

$cantidad_numeros=readline("¿Cuantos valores va a introducir? ");
if($cantidad_numeros < 0){
    echo "¡Imposible!";
}else{
    $suma= 0 ;
    for($i=1; $i<=$cantidad_numeros; $i=$i+1){
        $numero=readline("Escriba el numero".$i." :");
        $suma=$numero+$suma;
    }
    echo "La suma de los numeros que ha escrito es ".$suma;
}




?>