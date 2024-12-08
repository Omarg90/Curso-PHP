<?php

class Alumno{

    public string $nombre;
    public string $apellidos;
    public int $edad;
    public bool $admin;

    public function __construct(string $nombre, string $apellidos, int $edad, bool $admin)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->admin = $admin;
    }

}

$alumno1 = new Alumno("Omar", "Garcia", 34, true);
//print_r($alumno1);

//Convertimos nuestro objeto a formato json.
$jsonAlumno1 = json_encode($alumno1);
echo "<br>" . $jsonAlumno1 . "<br>" ;

//Traemos un objeto de json.
$Alumno1 = json_decode($jsonAlumno1);
print_r($Alumno1);

//Trabajando con arrays

$arr = [
    "nombre" => "Omar",
    "edad" => 34
];

$arrJson = json_encode($arr);
echo "<br>"  . $arrJson . "<br>" ;

//Para convertir de json en un array debemos especificar true, 
//si no lo devuelve como objeto.

$Arr = json_decode($arrJson, true); 

echo $Arr["nombre"];