<?php

/* Getter y setter nos permite accedes a las propiedades 
fuera de la clase para visualizarlas o modificarlas, pero con 
ciertas restricciones y validaciones o sin poder modificarlo
*/

class Asignatura
{
    //Accedemos a la propiedad privata $nombre medinate y getNombre;


    private int $id;
    private string $nombre;
    protected int $idProfesor;
    protected static array $asignaturas = [];

    public function __construct(int $id, string $nombre, int $idProfesor)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idProfesor = $idProfesor;
        self::$asignaturas[] = $this;
    }

    public function añadirAsignaturas(int $id, string $nombre, int $idProfesor)
    {
        $asignatura = new Asignatura($id, $nombre, $idProfesor);
        return $asignatura;
    }
    public static function verAsignaturas()
    {
        foreach (self::$asignaturas as $asignatura) {
            echo "</br>ID Asignatura: " . $asignatura->id . "</br>" .
                "Nombre: " . $asignatura->nombre . "</br>" .
                "ID Profesor: " . $asignatura->idProfesor . "</br>" .
                "-------------------------------------";
        }
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
}

$asignatura1 = new Asignatura(3, "LND", 1);
$asignatura2 = new Asignatura(2, "PRO", 7);
Asignatura::verAsignaturas();
// Cambiamos el nombre de la asignatura2
$asignatura2->setNombre("APL");
echo "</br>".$asignatura1->getNombre()."</br>";
echo $asignatura2->getNombre()."</br>";
