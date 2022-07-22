<?php
//                                    FUNCIONES NATIVAS
# Arreglos y Sus Funciones nativas

$cadena='';
$arreglo=[];
$videojuegos=[

    'FIFA','Fortine','Red Dead',
    'call of Dutty','Battlefield',
    'Pokemon','GTA','The Sims','NFL'
];

# Vacio-empty()
var_dump(empty($arreglo));
var_dump(empty($videojuegos));

# EXISTE - isset()   verifica si existe esa posicion en un arreglo 

var_dump(isset($videojuegos[5]));
var_dump(isset($videojuegos[50]));

# Contar elementos del arreglo  contar cuantos elementos hay en un arreglo
echo count ($videojuegos); 

# Antepenultimo elementos

$posicion = count($videojuegos) -2;
echo $videojuegos[$posicion];
echo $videojuegos[7];

# Ordenar el arreglo de manera alfabetica  sort() - ordena de manera alfabetica 

#sort($videojuegos);
#var_dump($videojuegos);

# Ordenar el arreglo sin perder su indice - asort()

asort($videojuegos);
var_dump($videojuegos);

# Ordenar de manera inversar - rsort()
#rsort($videojuegos);
var_dump($videojuegos);

#Ordenar de manera inversar sin perder su indice
arsort($videojuegos);
var_dump($videojuegos);













?>