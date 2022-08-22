<?php
/*
EJERCICIO

4.Escriba un programa que pida dos numeros enteros y que escriba 
si el mayor es multiplo del menor.
*/

// definimos dos variables

# definimo dos variables

$n1=48;
$n2=6;
if ($n1 % $n2 >= 1 and $n1> $n2){
    echo $n1," no multiplo ",$n2;
}else if ($n2 % $n1 >= 1 and $n2> $n1 ){
    echo $n2," no multiplo ",$n1;
}else{
    if ($n1 ==$n2){
        echo "Ambos numeros son iguales";
    }else{
        if ($n1 % $n2 == 0 ){
            echo $n1," es multiplo ",$n2;
        }else if ($n2 % $n1 == 0 ){
            echo $n2," es multiplo ",$n1;
        }
    }
}






?>