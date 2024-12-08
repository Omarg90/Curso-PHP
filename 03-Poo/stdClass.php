<?php

//Creamos un objeto sin clase existente.

$cerveza = new stdClass();

$cerveza->nombre = "Dorada";
$cerveza->alcohol = 4.75;

print_r($cerveza);
echo gettype($cerveza);

//Convertimos un objeto en un array

$arr = (array) $cerveza;
echo "</br>Nombre: " . $arr["nombre"] . " -- Alcohol: " .  $arr["alcohol"] . "</br>";

//Creamos un nuevo array y lo convertimos en un objeto.

$tienda = [
    "nombre" => "Multitienda",
    "direccion" => "C/San Juan, 3"
];

$objTienda = (object) $tienda;

echo $objTienda->nombre . "</br>";
print_r($objTienda);