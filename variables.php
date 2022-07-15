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
 echo $nueva."<br />";

 /*
  OPERADORES aritmeticos

  Suma + , suma de a+b
  Resta - , diferencia de a-b
  Multiplicacion * , producto de a *b
  Division /, cociente de a y b
  Modulo %, resto de a dividido por b

  

 */

 // Ejemplos

 # suma
 $a = 10;
 $b = 20;
 $c=2;

 $suma=$a+$b;
 echo "Suma: ".$suma."<br />";

# resta
$resta= $a-$b;
echo "Resta: ".$resta."<br />";

# Multiplicacion
$multiplicacion=$a*$b;
echo "Multiplicacion: ".$multiplicacion."<br />";

# Division
$division = $a/$c;
$division_2 = $c /$a;
echo "Division: ".$division."<br />";
echo "Division_2: ".$division_2."<br />";

# Modulo
$modulo=$a % $c;
$modulo_2=$a % $b;
echo "Modulo: ".$modulo."<br />";
echo "Modulo: ".$modulo_2."<br />";

/*
Operadores de Asignacion

= += *= /= .=

*/

# Operador de asignacion
$a =10;

$a +=5;  // $a=$a+5;
$a = $a+5;
echo $a."<br/>";

$b=5;
$b *=5; // $b=$b*5;
echo $b."<br/>";

$c=5;
$c /=5; //$c=$c/5;
echo $c."<br/>";


$a=10;
$a .= 5; // $a=$a." ".5;
echo $a."<br/>";

// Con cadena de caracteres

$a="abc"."edf";
$a .= "ghij"; // $a=$a.""."ghif"; 
echo $a."<br/>";

/*
Operadores de incremento / decremento
++$variable, $variable++
--$variable, $variable--
*/

$valor=15;
$nuevoValor= $valor++;
#$nuevoValor_2= ++$valor;
echo $nuevoValor."<br/>";
#echo $nuevoValor_2."<br/>";
echo $valor."<br/>";


$valor_2=15;
$nuevoValor_2= $valor_2--;
echo $nuevoValor_2."<br/>";
echo $valor_2;

?>