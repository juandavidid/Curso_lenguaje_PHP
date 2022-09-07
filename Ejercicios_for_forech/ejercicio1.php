<?php
 
 /*
 
  EJERCICIO 1

  1.Escriba un programa que pida dos numeros enteros y escriba 
    que numeros son pares y cuales impares desde el primero
    hasta el segundo.

 */

 # SOLUCION

 # definimos dos variables

 $numero_1=readline("Escriba un numero entero: ");
 $numero_2=readline("Escriba un entero mayor o igual que".$numero_1. " :"); # pendiente acomodar los espacion del mensaje

 if($numero_1 <= $numero_2 ){
    for ($i=$numero_1; $i <= $numero_2 ; $i=$i+1 ){
        if($i % 2 == 0){
            echo "El numero ",$i," par\n";
        }else{
            echo "El numero ",$i," impar\n";
        }
    }   
 }else{
    echo "¡le he pedido un numero entero mayor o igual que 6!";
 }














?>