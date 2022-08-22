<?php
/*
EJERCICIO

3.Escriba un programa que pida el año actual y un año
cualquiera y que escriba cuantos años han pasado desde
ese año o cuantos años faltan para llegar a ese año
*/

// definimos dos variables

$año_actual=2022;
$año_cualquiera=2000;

if ($año_actual !=2022){
    echo "El actual no coinciden";
}else{
    echo "Han pasado ",$año_actual-$año_cualquiera," años" ;
}


?>