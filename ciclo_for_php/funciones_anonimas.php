<?php


/*

TEMA: FUNCIONES ANONIMAS O clouchor


*/

# Esto es una funcion anonima
$despedida = function() {
    echo "Ultima clase de PHP desde cero, gracias por acompañarnos \n";
};

$despedida() ;

echo "-----------------------------------------------------------------------------------\n";

function finalizaCurso (Closure $curso,$nombre){
    return $curso ($nombre);
}

# estos son funciones closure
$php = function ($nombre){
    return "<p> Gracias".$nombre."por finalizar el curso php\n";
};

# estos son funciones closure
$laravel = function ($nombre) {
    return "<p> Gracias".$nombre."por finalizar el curso laravel\n";
};


# aqui llamamos las funciones

echo finalizaCurso($php,'Juan');
echo finalizaCurso($laravel,'luis');


?>