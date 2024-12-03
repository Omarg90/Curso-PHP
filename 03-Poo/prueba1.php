<?php

/*
En esta prueba mostramos una clase que posee un constructor
y a su vez una funcion que tambien nos permite instanciar.


class Familiar {
    public string $nombre;
    public int $edad;

    public static int $numFamiliares = 0;
    public static array $familiares = [];

    // Constructor para inicializar las propiedades
    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para agregar un nuevo familiar
    public static function nuevoFamiliar(string $nombre, int $edad) {
        $familiar = new Familiar($nombre, $edad); // Usar el constructor
        self::$familiares[] = $familiar; // Agregar a la lista
        self::$numFamiliares++; // Incrementar el contador
        return $familiar;
    }

    public static function index() {
        $output = "";
        foreach (self::$familiares as $familiar) {
            $output .= "Nombre: " . $familiar->nombre . " --> ";
            $output .= "Edad: " . $familiar->edad . "<br/>";
        }
        return $output;
    }
}

// Crear nuevos familiares usando el método estático
Familiar::nuevoFamiliar("Omar", 34);
Familiar::nuevoFamiliar("Sara", 33);
Familiar::nuevoFamiliar("Zoe", 3);

// Accedemos a la propiedad estática de la clase Familiar.
echo "Número de familiares inscritos: " . Familiar::$numFamiliares . "<br/>";
echo Familiar::index();
*/