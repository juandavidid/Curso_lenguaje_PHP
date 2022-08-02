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
echo "<br/>";



#Sumar valores del arreglo
$numeros=[1,20,30,15,5];
$suma = array_sum($numeros);
echo "Mi suma es ". $suma;
echo "<br/>";


#Encontrar diferencia entre arreglos
$salonA=['a1' => 'Juan','a2' => 'Susana','a3' => 'Homero','a4' => 'Jaime'];
$salonB=['a1' => 'Santiago', 'a2' => 'Diego','a3' => 'David','a4' => 'Jaime'];

$diferencia = array_diff($salonA,$salonB);

var_dump($diferencia);
echo "<br/>";

# Dividir un arreglo especificado su tamaño
$videojugos =[
    'FIFA' ,'Fortnite','Red Dead',
    'Call of Dutty','Battlefield',
    'Pokemon','GTA','The Sims','NFL'
];

$dividir=array_chunk($videojuegos,2);
var_dump($dividir);
echo "<br/>";

#Dividir el arreglo y eliminar lo anterior
var_dump(array_slice($videojuegos,2));

















?>