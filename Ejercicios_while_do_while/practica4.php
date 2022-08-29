<?php

/*

EJERCICIO

4.Escriba un programa que simule una hucha.
El programa solicitara primero una cantidad,
que sera la cantidad de dinero que queremos
ahorrar.A continuacion, el programa solicitara
una y otra vez las cantidades que se iran ahorrando,
hasta que el total ahorrado iguale o supere al objetivo.
el programa no comprobara que las cantidades sean positivas.

*/

# SOLUCION

# declaracion de variables

$cantidad_ahorrar= readline("¿Cuantos euros quiere ahorrar: ");
$cantidad_objetivo= 0;
while ($cantidad_objetivo <= $cantidad_ahorrar){
    
    $cantidad_hucha=readline("¿Cuantos euros quiere meter en la hucha: "); 
    $cantidad_objetivo=$cantidad_objetivo+$cantidad_hucha;
    
    # $cantidad_objetivo= $cantidad_objetivo=readline("¿Cuantos euros quiere meter en la hucha: ");   +   $cantidad_objetivo;
}
echo "¡Objetivo conseguido¡","Ha ahorrado usted\t",$cantidad_objetivo,"\teuros" ;

?>