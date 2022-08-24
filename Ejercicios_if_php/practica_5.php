<?php

/*
EJERCICIO

5.Escriba un programa que pida tres numeros y que escriba si 
son los tres iguales,si hay dos iguales o si son los tres
distintos
*/

# definimos tres variables

$n1=4;
$n2=5;
$n3=5;

# n1==n2  n3 (n1 y n2 ) o n1==n3 n2 (n1 y n3) -- n2==n3   n1 (n2 y n3)   
if ($n1!=$n2 and $n1!=$n3 and $n2!=$n3){
    echo "Ambos numeros son diferentes";
}else{
    if ($n1==$n2 and $n1 != $n3 ){   // n1 y n2
        echo "Los numeros ",$n1," y ",$n2," son iguales";
    }else if ($n1==$n3 and $n1 != $n2 ){  // n1 y n3
        echo "Los numeros ",$n1,"y",$n3,"son iguales";
    }else if ($n2==$n3 and $n2 != $n1){ // n2 y n3
        echo "Los numeros ",$n2,"y",$n3,"son iguales";
    }else if ($n1==$n2 and $n1==$n3 and $n2==$n3) {
        echo "Ambos numeros son iguales";
    }else{
        echo "Ambos numeros son iguales";
    }    
}

    
        
?>