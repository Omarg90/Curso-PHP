<?php
declare(strict_types=1);
/*
El encapsulamiento nos permite restringir acceso a ciertas
propiedads y/o metodos
*/

/*
public -> puede ser leido dentro y fuera de la clase.
private -> Solo puede ser leido dentro de la clase.
protected -> Solo puede ver los elementos la clase, y las clase que hereden de esta.
*/

class Asignatura{
    //Puedo trabajar con protected y static ya que no necesito llamar
    // elementos fuera de la clase.
    
    private int $id;
    protected string $nombre;
    protected int $idProfesor;
    protected static array $asignaturas = [];

    public function __construct(int $id, string $nombre, int $idProfesor)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idProfesor = $idProfesor;
    }

    public static function añadirAsignaturas(int $id, string $nombre, int $idProfesor)
    {
        $asignatura = new Asignatura($id, $nombre, $idProfesor);
        self::$asignaturas[] = $asignatura;
        return $asignatura;
    }


    public static function verAsignaturas()
    {
        foreach (self::$asignaturas as $asignatura){
            echo "ID Asignatura: " . $asignatura->id . "</br>" . 
                "Nombre: " . $asignatura->nombre . "</br>". 
                "ID Profesor: " . $asignatura->idProfesor . "</br>" . 
                "-------------------------------------";
        }
    }
}

Asignatura::añadirAsignaturas(5, "Progamacion", 21);
Asignatura::verAsignaturas();
