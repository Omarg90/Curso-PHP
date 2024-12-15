<?php

/**
 * Una funcion de primera clase es aquella que se puede guardar en una variable
 * para su uso posterior. Se puede pasar a otras funciones como parametro...
 */


//Creamos una variable igual a una funcion anónima.
$suma = function (int $a, int $b){
    return $a +$b;
};

//visualizamos
echo $suma(3, 5);

