<?php

//Array multidimensional.
$personas = [
    [
        "nombre" => "Zoe",
        "apellido" => "Garcia",
        "edad" => 3
    ],
    [
        "nombre" => "Omar",
        "apellido" => "Garcia",
        "edad" => 34,
    ],
    [
        "nombre" => "Sara",
        "apellido" => "Luis",
        "edad" => 33,
    ],
];

//Recorriendo el array asociativo.
foreach($personas as $persona){
    foreach($persona as $k => $v){
        echo $k . ": " . $v . "</br>";
    }
}

echo $personas[0]["nombre"];
foreach($personas as $persona){
    var_dump($persona);
}

?>