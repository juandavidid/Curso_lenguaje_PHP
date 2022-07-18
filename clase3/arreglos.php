<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

# ARREGLOS

//Arreglo vacio

$numeros = [];
$numeros = array ();


//echo $numeros; con la funcion echo no se puede imprimir 
var_dump($numeros);
print_r($numeros);

echo "<br/>";

// Arreglo indexados

#$dias = ['Lunes','Martes','Miercoles','Jueves'];
$dias= array ('Lunes','Martes','Miercoles','Jueves');
var_dump($dias);
echo "<br/>";
print_r($dias);
echo "<br/>";

# Como mostras el contenido que tiene un arreglo indexado
echo $dias[2];

# si quiero agregar contenido al arreglo
$dias[]='Viernes';
echo "<br/>";
var_dump($dias);

# Si queremos agregar contenido al arreglo por posicion diferente
$dias [15]='Dia libre';
echo "<br/>";
var_dump($dias);

# Si coloco una posicion que no existe me dara error 

echo $dias[13];

echo "---------------------------------------------------------------------------------------------------------------------------------<br/>";

// Arreglo Asociado

$usuario = ['nombre' => 'Yesi', 'Edad' => '34', 'Lenguaje' => 'PHP'];
var_dump($usuario);
echo "<br/>";

$usuario_2= ['nombre' => 'Juan David', 'Edad' => '28', 'Lenguaje' => 'Python'];
var_dump($usuario_2);
echo "<br/>";

# Para mostrar contendio de un arreglo asociado
echo "Mi nombre es ".$usuario_2['nombre']."<br/";


// Arreglo Multidimencional

# 1. Tipo indexado

$alumnos = array(
    array('Juan',20,'Mexico'), # Fila 1
    array('Salome',25,'Peru'), # Fila 2
    array('Carlos',24,'Bolivia'),#Fila 3
    array('Homero',37,'Neza'), # Fila 4

); 

var_dump($alumnos);
echo "<br/>";

$alumnos_2 = array(
   ['Martinez',24,'Colombia'],
   ['Alejandra',28,'Argentina'],
);

var_dump($alumnos_2);
echo "<br/>";


# Si queremos mostrar datos de un arreglo multidimencional
echo $alumnos[1][0];
echo "<br/>";


# 2. Tipo asociado

$alumnos = array(
    array('nombre' => 'Juan','edad' => 20, 'pais' => 'Mexico'),
    array('nombre' => 'Salome','edad' => 28,'pais' => 'Colombia'),
    array('nombre' => 'Carlos','edad' => 30,'pais' => 'Argentina'),
);

var_dump($alumnos);
echo "<br/>";

# Si queremos mostrar datos de un arreglo multidimencional
echo "<br/>".$alumnos[2]['edad'];

#Si queremoos agregar una clave y valor al array Multidimencional
$alumnos [1]['calificacion']= 9.5;
echo "<br/>";

var_dump($alumnos);

?>