    <?php
    //Definimos la clase persona
    //PROPIEDADES
    class Persona{
        public $nombre;
        public $apellidos;
        public $edad;
        public static $personas = [];

        public static function crearPersona(string $nombre, string $apellidos, int $edad){
            $persona = new Persona();
            $persona->apellidos= $apellidos;
            $persona->nombre = $nombre;
            $persona->edad = $edad;
            self::$personas [] = $persona;
            return $persona;
        }
    }
    //Creamos objeto persona.
    /*Creado de esta forma no se guarda en el array.
    $persona1 = new Persona();
    $persona1->nombre = "Omar";
    $persona1->apellidos = "Garcia";
    $persona1->edad = 34;
    print_r($persona1);
    */
    $persona1 = Persona::crearPersona("Omar", "Garcia", 34);
    $persona2 = Persona::crearPersona("Sara", "Luis", 33);
    $persona3 = Persona::crearPersona("Zoe", "Garcia", 3);
    
    foreach (Persona::$personas as $persona) {
        echo ("Nombre: " . $persona->nombre . "</br>");
        echo "Apellidos: " . $persona->apellidos . "</br>";
        echo "Edad: " . $persona->edad . "</br>";
        echo "--------------------" . "</br>";
    
    }
    
    //print_r($persona2);


    //MÉTODOS.


    ?>