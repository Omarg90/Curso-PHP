<?php

//Indicamos el archivo que deseamos traernos.
require "Utils\operacion.php";

//Indicamos la clase que vamos a utilizar
use Utils\Operacion;

$suma = new Operacion();
echo $suma->suma(3, 4);


