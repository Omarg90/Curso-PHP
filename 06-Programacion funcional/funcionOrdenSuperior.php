<?php

//Funciones que puede recibir otra funcion como párametro o retornar otra funcion como resultado.


//Creamos una variable igual a una funcion anónima.
$suma = function (int $a, int $b){
    return $a +$b;
};
function mul(int $a, int $b){
    return $a * $b;
}
function show($fn, int $a, int $b){
    echo $fn($a, $b) . "<br>";
}
//visualizamos
//echo $suma(3, 5);

//Visualizamos mediante la funcion.
show($suma,4, 6);//Enviamos el nombre de la funcion anónima.

//En caso que la funcion no sea anónima, pasamos el nombre entre comillas como un string.

show("mul", 3, 5);
