<?php
/*
//Ejemplo básico de isset, unset.

$a = 4;

//Comprobamos si existe la variable a con isset.
if(isset($a)){
    echo "Existe <br>";
}else{
    echo "No existe <br>";
};


if(isset($b)){
    echo "Existe <br>";
}else{
    echo "No existe <br>";
};

//Unset elimina un elemento. Eliminamos a y comprobamos que no existe.
unset($a);
if(isset($a)){
    echo "Existe";
}else{
    echo "No existe";
};
*/

class Coche{
    public string $marca;
    public string $color;


    //Comprueba que la propiedad existe.
    public function __isset($marca)
    {
        echo "Se comprueba que existe.<br>";
    }

    //Solo se ejecuta con propiedades que no existen
    public function __unset($marca)
    {
        echo "Se intento eliminar la propiedad $marca<br>";
    }

}

$coche1 = new Coche();
//$coche1->marca = "Ford";

//Al ejecutar un isset sobre la propiedad de un objeto de la clase donde tenemos la funcion
//isset, llama a dicha funcion.

//Comprobamos que existe la propiedad matricula, al no existir se ejecuta isset.
if (isset($coche1->matricula)){
    echo "Existe<br>";
}else{
    echo "No existe<br>";
}

unset($coche1->matricula);