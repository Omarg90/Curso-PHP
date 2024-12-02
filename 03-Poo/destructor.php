<?php

class Alumnos {
    public $nombre;
    public $edad;
    public $dni;

    // Constructor para inicializar los valores
    public function __construct($nombre, $edad, $dni) {
        if ($edad < 0) {
            throw new Exception("La edad no puede ser negativa.");
        }
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
    }

    /*El desctructor no podemos invocarlo, se invoca solo
    * no recibe parametros ni devuelve nada
    */
    
    public function __destruct()
    {
        echo "Se ha eliminado el objeto";
    }
    function verListadoAlumnos($alumnos) {
        if (empty($alumnos)) {
            echo "No hay alumnos en el listado.<br>";
            return;
        }
    
        foreach ($alumnos as $alumno) {
            echo "Nombre: " . $alumno->nombre . "<br>";
            echo "Edad: " . $alumno->edad . "<br>";
            echo "DNI: " . $alumno->dni . "<br>";
            echo "--------------------<br>";
        }
    }

}

// Función para mostrar el listado de alumnos
function verListadoAlumnos($alumnos) {
    if (empty($alumnos)) {
        echo "No hay alumnos en el listado.<br>";
        return;
    }

    foreach ($alumnos as $alumno) {
        echo "Nombre: " . $alumno->nombre . "<br>";
        echo "Edad: " . $alumno->edad . "<br>";
        echo "DNI: " . $alumno->dni . "<br>";
        echo "--------------------<br>";
    }
}

// Crear algunos objetos de ejemplo
$alumno1 = new Alumnos("Omar García", 20, "12345678A");
$alumno2 = new Alumnos("Sara López", 22, "87654321B");
$alumno3 = new Alumnos("Zoe Martínez", 19, "45678901C");

// Guardar en un array
$listadoAlumnos = [$alumno1, $alumno2, $alumno3];

// Mostrar el listado de alumnos
verListadoAlumnos($listadoAlumnos);

?>
