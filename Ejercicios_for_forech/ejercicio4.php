<?php

/*

EJERCICIO 

4.Escriba un programa que pregunte cuantos numeros se van
a introducir,pida esos numeros,y muestre un mensaje cada
vez que un numero no sea mayor que el anterior.

*/

// SOLUCION

// definicion de variables


$cantidad_numeros=readline("¿Cuantos valores va a introducir: ");

if ($cantidad_numeros < 0){
    echo "¡Imposible!";

}else{
    $numeros_ingresados=readline("Escriba un numero: ");
    $numeros_mas_grande=readline("Escriba un numero mas grande que ".$numeros_ingresados);
    for ($i=1; $i<$cantidad_numeros; $i=$i+1){
       $numero=readline("Escriba un numero mas grande que ".$numeros_ingresados);
       
       if ($numeros_ingresados > $numeros_mas_grande  ){
            while($numeros_ingresados > $numeros_mas_grande){
                echo "¡".$numeros_mas_grande."no es mayor que ".$numeros_ingresados."\n" ;
                $numeros_mas_grande=readline("Escriba un numero mas grande que : ".$numeros_ingresados);
            }
            continue;

       }

    }
    echo "Gracias por su colaboracion";

}






?>