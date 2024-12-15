<?php

/**
 * Arrow function o funciones flecha.
 * fn es una palabra reservada para declarar una funcion flecha.
 * Las arrow function solo aceptan una linea de código.
 */

//Ejemplo de una funcion flecha, utilizamos siempre fn,
$suma = fn (int $a, int $b) => $a + $b;

function show($fn, $a, $b){
    echo $fn($a, $b) . "<br>";
}

echo "Suma: ";
show ($suma, 4, 3);


//Creamos la funcion en el mismo echo.
echo "Resta: ";
show(fn (int $a, int $b)=> $a - $b, 10, 5);