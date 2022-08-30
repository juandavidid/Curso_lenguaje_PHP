<?php

/*

TEMA: FUNCIONES

SINTAXIS

function nombreFuncion ($parametros){
    bloque de codigo;
    return Respuesta ;
}


*/

# Ejemplos

function sumarNumeros($a,$b){
    $suma=$a+$b;
    return $suma;
}

#aqui llamamos la funcion

$numero1=5;

echo sumarNumeros(5,10),"\n";

echo "----------------------------------------------------------------------------------------------------\n";

function sumar($a,$b, $imprimir=false){
    $sumar=$a+$b;
    if ($imprimir== true){
        echo "la suma es ",$sumar,"\n";
    }else{
        return $sumar;
    }
    
}

sumar(5,5,true);


?>