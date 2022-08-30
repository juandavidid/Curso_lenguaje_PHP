<?php
/*

TEMA : CICLO FOR 


SINTAXIS

for (expresion1; expresion2;expresion3){
    bloque de codigo
}

expresion1=Evalua la iteracion del ciclo o inicializa  la variable iteradora
expresion2=Evalua la logica
expresion3= iteracion de la variable iteradora (variable contadora)

*/

# Ejemplo

for ($i=1; $i<5 ; $i=$i+1){
    echo "El numero es ".$i."\n";
}

#Otra forma es poder tener varias iteraciones

for ($i=1 , $j=10; $i <50 and $j <100; $i=$i+10, $j=$j+10){
    echo "El numero es ".$i."\n";
    echo "El numero es".$j."\n";
}



?>