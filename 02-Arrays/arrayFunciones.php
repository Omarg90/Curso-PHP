<?php

//Array asociativo dentro de un array indexado.
$personas =[
    [
    "nombre" => "Omar",
    "apellido" => "Garcia",
    "edad" => 44,
    ]
];

//Añadiendo otra persona al array
$personas [] = [
    "nombre" => "Zoe",
    "apellido" => "Garcia",
    "edad" => 3,
];
//Listando personas.
foreach($personas as $persona){
    foreach ($persona as $k => $v){
        echo ($k . ": " . $v . "</br>");
    }
}

//FUNCIONES.
//El resultado de ciertas funciones se puede guardar en variables.

//count - contar elementos de un array.
$numPersonas = count($personas);
//Push - añadir elemento al array en la utlima posicion.
array_push($personas,[
    "nombre" => "Sara",
    "apellidos" => "Luis",
    "edad" => 33,
]);
print_r($personas);

//array_pop - elimina el ultimo elemento del array
$personasElim = array_pop($personas);

//Ver array
print_r($personas);

/*in_array - Comprueba que exista el elemento en un array. Funciona mejor con array indexado, 
/ busa en el primer nivel del array, por lo cual no encuentra los valores.
if(in_array("Omar", $personas)){
    echo "Existe";
}*/

//Buscando con una funcion asociativa.
foreach($personas as $persona){
    foreach ($persona as $k => $v){
        if ($v === "Omar"){
        echo ("</br>" . $k . ": " . $v . "</br>");
        }
    }
}
?>