<?php
/*
EJERICICIO

6.Escriba un programa que pida un año y que
escriba si es bisiesto o no. Se recuerda
que los años bisiestos son multiplos de 4
pero los multiplos de 100 no los son, aunque
los multiplos  de 400 si
*/

// declaramos la variables

$año_actual=2033;

if ($año_actual % 100 > 0 ) {
    echo "No es años bisiesto";
}else{
    if ($año_actual % 4 == 0 or $año_actual % 400 ==0){
        echo "Es año bisiesto";
    }
}
   





?>