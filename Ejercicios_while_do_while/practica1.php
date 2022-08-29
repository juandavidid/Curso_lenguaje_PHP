<?php

/*

EJERCICIO

1.Escriba un programa que pregunte una y otra vez
si desea continuar con el programa, siempre 
que se conteste exactamente si (en minusculas y con tilde).

*/

// SOLUCION

// Definimos las variables



/*
while(True){
    $respuesta=readline("¿Desea continuar el programa: ");
      if ($respuesta=='si'){
               continue;
      }else{
        echo "!Hasta la vista¡";
        break;
      }

}
*/

# otra forma de hacer codigo
$respuesta=readline("¿Desea continuar el programa: ");
while ($respuesta=='si'){
  $respuesta=readline("¿Desea continuar el programa: ");
}
echo "¡Hast la vista!";






?>