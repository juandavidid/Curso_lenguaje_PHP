<?php


/*

SINTAXIS


fscan(STDIN,"formato",$variables.....)
fscan(STDIN,"formato",$variables)
*/
// define ('STDIN',fopen('C:\xampp\htdocs\VSC_PHP\Curso_lenguaje_PHP','r'));
echo "Ingrese tu nombre: ";
fscanf (STDIN,"%s",$nombre);

echo "Hola, $nombre";





?>