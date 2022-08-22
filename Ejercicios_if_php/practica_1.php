<?php

/*
EJERCICIO 1

1.Escriba un programa que pida dos numeros enteros y que calcule su division 
escribiendo si la division es exacta o no.

*/

// definimos dos variables

$numero_1=5;
$numero_2=0;
/*
if ($numero_1%$numero_2 == 0){
    echo "la division es exacta";
}else{
    echo "La division  no es exacta <br/>";
}
*/
// Mejore el programa anterior haciendo que tenga en cuenta que no se puede dividir por cero

if ($numero_2 == 0 ){
    echo "No se puede dividir por cero <br />";
}else if  ($numero_1 % $numero_2 == 0){
    echo "la division es exacta";
}else if ($numero_1 % $numero_2 == 1){
    echo "La division no es exacta";
}


// Otra forma de hacer codigo

$dividendo = 4;
$divisor = 3;
if ($divisor == 0) {
    echo "No se puede dividir por cero";
}else{
   if ( $dividendo % $divisor == 0  ){
           echo "la division es exacta Cociente  : ".$dividendo / $divisor;
   }else{
        echo "la divison no es exacta Cociente ". $dividendo / $divisor;
        echo "Resto". $dividendo % $divisor;
   }
}
?>