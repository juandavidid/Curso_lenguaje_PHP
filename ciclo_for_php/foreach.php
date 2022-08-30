<?php

/*
TEMA : Foreach 

solo se usa para arreglos(listas o vectores)


SINTAXIS


foreach (arreglo AS valor){
    bloque de codigo
}

*/

# EJEMPLOS

$redessociales=array("www.facebook.com","www.twitter.com","www.instagram.com");

foreach ($redessociales AS  $rs){
    echo $rs,"\n";
}

echo "---------------------------------------------------------------------------------------------------\n" ;

# Para arreglos asociativos

$redessociales=array('FB' => 'www.facebook.com','TW' =>"www.twitter.com", 'IN' =>"www.instagram.com" );

foreach ($redessociales AS $llave => $valor ){
    echo $llave," ",$valor,"\n";
}


?>