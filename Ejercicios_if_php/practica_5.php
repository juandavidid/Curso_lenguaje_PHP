<?php

/*
EJERCICIO

5.Escriba un programa que pida tres numeros y que escriba si 
son los tres iguales,si hay dos iguales o si son los tres
distintos
*/
define ('STDIN',fopen("php://stdin","r"));
echo "Ingresa tu nombre: ";
fscanf(STDIN,"%s", $nombre);
echo "Hola",$nombre;



?>