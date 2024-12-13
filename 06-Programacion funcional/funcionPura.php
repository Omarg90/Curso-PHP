<?php

/**
 * Una funcion pura tiene que tener 2 caracteristicas, 
 * 1-Para un mismo conjunto de entrada, tiene que el mismo de salida.
 * 2-No tiene efectos secundarios sobre elemntos externos a ella.
 */

class Contador{
    public int $cuenta = 0;
}

$contador = new Contador;
echo $contador->cuenta . "<br>";

//Esto no es una funcion pura ya que modifica el valor de $cuenta.
function show(Contador $contador): string{ //Ponemos string para que acepte el salto de linea, aunque devuelve un int.
    $contador->cuenta ++;
    return $contador->cuenta."<br>";
}
echo show($contador);
echo show($contador);
echo show($contador);
echo show($contador);

echo $contador->cuenta . "<br>";

//Esta es una funcion pura, devuelve el mismo valor que ingresa y no modifica ningun elemento externo a ella.
function suma(float $a, float $b): float
{
    echo "$a + $b = ";
    return $a + $b;
}

echo suma(4, 3);
?>