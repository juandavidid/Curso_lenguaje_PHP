<?php
 
 // variables en php

 #Reglas

 $nombre = 'Yesi';
 $_nombre = 'Yesi';

 $color = 'Rojo';
 $Color = 'Azul';
 $COLOR = 'Verde';

 $color = 'Blanco';
 $color = 14.10;

 # echo $color;

 // Otros tipos de datos 

 $entero = 123 ;
 $negativo = -1000;
 $float = 13.1416;

 // asi se concatenar

 echo $entero." ".$negativo." ".$float."<br/> ";

 // Otro tipos de bases

 $octal=0755;
 $hexadecimal=0xC4E;
 $binario = 0b1010;

 echo $octal." ".$hexadecimal." ".$binario."<br /> ";

 $nombre = 'Yesi';
 $apellido = "Days";
 $edad = 39 ;
 $soltero = false ; // tambien se puede colocar asi FALSE

 echo $edad."<br />" ;


 // funcion gettype() 

 echo gettype($soltero)."<br />";
 
 var_dump($edad)."<br />";

 echo var_dump($edad)."<br />";

 echo var_dump($soltero)."<br />";



 # Datos por Referencias

 $variable = 'Lorem ipsum';
 $nueva = &$variable;

 echo $nueva."<br />";


 $variable = "Nuevo dato";
 echo $nueva;

?>