<?php

/*

EJERICICIOS

2.Escriba un programa que pregunte una y otra vez
si desea continuar con el programa, siempre 
que se conteste exactamente si (en minusculas y con tilde).

*/

/*
$respuesta=readline("¿Desea continuar el programa: ");
while ($respuesta=='SI' or $respuesta=='s' or $respuesta=='S' or $respuesta=='no'){
  $respuesta=readline("¿Desea continuar el programa: ");
}
echo "¡Hast la vista!";

*/

# Otra forma de hacer codigo
$respuesta=readline("¿Desea continuar el programa: ");
while ($respuesta!='SI'){
    $respuesta=readline("¿Desea continuar el programa: ");
  }
  echo "¡Hasta la vista!";

?>