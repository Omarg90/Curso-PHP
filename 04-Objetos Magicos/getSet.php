<?php


//Los metodos ya definidos _ _get, _ _set.

class Persona{

    public string $nombre;
    public int $edad;

    //Cuando se crea un alumno, que no contenga el atributo nombre
    public function __get($nombre)
    {
        echo "No existe ese atributo en el alumno";
    }
    
    //Nos muestra el mensaje cuando creamos un objeto que no tiene
    //las propiedades que hemos definido.
    public function __set($name, $value)
    {
        echo "No existe ese campo en la clase Alumno.";
    }

}

$alumno1 = new Persona();
$alumno1->nombre = "Omar";
$alumno1->edad = 34;
$alumno1->apellidos = "Garcia";

echo $alumno1->nombre;
echo $alumno1->edad;
echo $alumno1->apellidos;