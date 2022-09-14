<?php

/*

EJERCICIO

5.Escriba un programa que pregunte cuantos numeros se van
a introducir, pida esos numeros y escriba cuantos negativos
ha introducido.
*/

$cantidad=readline("¿Cuantos valores va introducir? ");

if($cantidad < 0){
    echo "¡Imposible!";
}else{
    $sumadora=0;
    for ($i=1; $i<=$cantidad ; $i=$i+1){
        $numero=readline("Escriba el numero ".$i.":");
        
        if ($numero < 0){
            $sumadora=$sumadora+1;
        }
    }
    echo "Ha escrito ".$sumadora." numero negativo";
}


?>