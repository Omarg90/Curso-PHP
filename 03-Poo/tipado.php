<?php

/*
Php no permite tipado en sus variables.
Aunque dentro de una clase, si podemos definir el tipo de variable 
que vamos a utlizar, al igual que como parametros de una funcion tambien
se puede definir el tipo
*/

class Familiarr{

    //definimos los tipos de variables de las clases.
    public string $nombre;
    public int $edad;

    //utilizamos el tipado dentro de una funcion
    public function __construct(string $nombre, int $edad)
    {
        $this->$nombre = $nombre;
        $this->$edad = $edad;
    }
}

$familiar = new Familiarr("Omar", 34);

print_r($familiar);

?>