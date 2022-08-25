<?php
/* 
TEMA = WHILE (MIENTRAS)

while (condicion) {
    bloque de codigo
    Deternerse
}


TEMA : Do-while (Hacer-Mientras)

incrementar
do{
    bloque de codigo
}while (condicion);

*/

# Ejemplo de ciclo while

$i = 1;
while ($i < 5){
    echo "El numero es ". $i."<br />";
    $i ++ ;
    
}
# Definimos el arreglo

$frutas=array('naranja','manzana','platano','uvas','mandarian');

$salir=0;
$i = 0;

while ($salir != 1){
    if ($frutas[$i] == 'uvas'){
        echo "<p>Encontre las uvas </p>";
        $salir = 1;
    }else{
        echo "<p>la fruta encontrada es".$frutas[$i]."</p>";
        $i=$i+1 ; // $i++;
    }

}

# Ejemplo del ciclo Do-while


$i = 5;

do{
    echo "Numero ". $i. "<br />";
    $i++ ;

}while ($i <5 );




?>