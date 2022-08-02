<?php

#Dividir el arreglo y eliminar lo anterios
$videojuegos =[
    'FIFA' ,'Fortnite','Red Dead',
    'Call of Dutty','Battlefield',
    'Pokemon','GTA','The Sims','NFL'
];

var_dump(array_slice($videojuegos,2));
echo "<br/>";


#Unir arreglos

$frutas =['platano','Uva','Manzana'];
$verduras = ['chile','tomate'];

$unir = array_merge($frutas,$verduras);
var_dump($unir);
echo "<br/>";

#Eliminar el ultimo elemento
array_pop($videojuegos);
var_dump($videojuegos);
echo "<br/>";

#Agregar uno o mas elementos al final del arreglo
array_push($videojuegos,'Smash Bros');
var_dump($videojuegos);
echo "<br/>";

#Buscar un elemento en el arreglo
$alumnos=array(1,2,3,4,5,6,7);
$buscar = array_search(3,$alumnos);
var_dump($buscar);









?>