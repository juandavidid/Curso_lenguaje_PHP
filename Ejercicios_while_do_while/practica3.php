<?php
/*

EJERCICIO

3.Escriba un programa que solicite una
contraseña(el texto de la contraseña no es importante)
y la vuelva a solicitar hasta que las dos contraseñas
coincidan.

*/

echo "CONFIRME SU CONTRASEÑA \n";

$contraseña=readline("Escriba su contraseña: ");
$confirmacion_contraseña=readline("Escriba de nuevo su contraseña: ");

while($contraseña!=$confirmacion_contraseña){
    echo "las contraseñas no coinciden. Intentelo de nuevo\n";
    $contraseña=readline("Escriba su contraseña: ");
    $confirmacion_contraseña=readline("Escriba de nuevo su contraseña: ");
}

echo "Contraseñas confirmada. !Hasta la vista¡";







?>