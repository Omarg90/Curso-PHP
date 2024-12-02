<?php

//ARRAYS CLAVE => VALOR.

$personas =[
    "nombre" => "Omar",
    "apellido" => "Garcia",
    "edad" => 44,
];

echo $personas["nombre"];
$personas["edad"] = 34;
echo ("</br>" . $personas["edad"]);


?>