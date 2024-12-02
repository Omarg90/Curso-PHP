<?php

$nombres = ["Zoe", "Sara", "Omar"];
//Mostrando un array indexado
foreach ($nombres as $nombre){
    echo ("$nombre </br>");
}
$personas =[
    "nombre" => "Omar",
    "apellido" => "Garcia",
    "edad" => 44,
];
//Un array asociativo
foreach($personas as $key => $value){
    echo $key . ":" . $value . "</br>";
}
?>