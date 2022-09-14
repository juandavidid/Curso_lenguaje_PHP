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
   $numero_inicio=readline("Escriba un numero: ");
   for ($i=1;$i<$cantidad_numeros-1;$i=$i+1){
      $numero=readline("Escriba un numero mas grande que ".$numero_inicio." :");
      if ($numero <= $numero_inicio){
          echo "el numero ".$numero." no es mayor que ".$numero_inicio."\n" ;
          $numero=readline("Escriba un numero mas grande que ".$numero_inicio." :");
        }
      $numero_inicio=$numero;
    }
    echo "Gracias por su colaboracion";

}






?>