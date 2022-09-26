<?php
/*
EJERCICIO 

Escriba un programa que pregunte cuantos numeros
se van a introducir, pida esos numeros, y escriba
el mayor, el menor y la media aritmetica.

Se recuerda que la media aritmetica de un conjunto
de valores es la suma de esos valores dividida 
por la cantidad de valores

*/

// SOLUCION

// definicion

$cantidad=readline("¿Cuantos valores va a introducir? ");
if($cantidad < 1){
    echo "¡Imposible!";
}else{
    $suma=0;
    $lista=[];
    for($i=1;$i<=$cantidad;$i=$i+1){
        $numero=readline("Escriba el numero ".$i.": \n");
        $suma=$suma +$numero; 
        $lista[$i]=$numero;       
    }
   foreach($lista as $a){
       echo "lista ".$a."\n"; 
       


   } 

    $media_aritmetica=$suma/$cantidad;
    echo "La media de los numeros introduccidos es ".$media_aritmetica."\n";  
    var_dump ($lista);
}



?>