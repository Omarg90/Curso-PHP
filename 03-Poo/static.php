<?php

/*
Las propiedades y metodos estaticos pertenece a la clase y no al objeto,
por lo cual no necesitas crear un objeto para acceder a ella.
Se comparte con todos los objetos.
*/
class Familiar{
    public string $nombre;
    public int $edad;

    public static $numFamiliares = 0;
    public static $familiar = [];

    public function nuevoFamiliar(string $nombre, int $edad){
        $familiar = new Familiar;
        $familiar->nombre = $nombre;
        $familiar->edad = $edad;
        //para acceder a la propiedad static usamos self.
        self::$familiar[] = $familiar;
        self::$numFamiliares++;
        return $familiar;
    }

    public static function index()
    {
        foreach(self::$familiar as $familiar){
            echo "Nombre: " . $familiar->nombre . " --> ";
            echo "Edad: " . $familiar->edad . "</br>";
        }
    }
}

$familiar = new Familiar();
$familiar->nuevoFamiliar("Omar", 34);
$familiar->nuevoFamiliar("Sara", 33);
$familiar->nuevoFamiliar("Zoe", 3);


//Accedemos a la propiedad static de la clase familiar.
echo "Número de familiar inscritos: " . Familiar::$numFamiliares . "</br>";
echo Familiar::index();

?>