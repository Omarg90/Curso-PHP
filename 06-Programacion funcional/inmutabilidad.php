<?php

/*
Capacidad que tienes ciertas propiedades, objetos o valores para no modificarse.
*/ 

class Location{

    private float $x;
    private float $y;

    public function __construct(float $x, float $y) {
        $this->x=$x;
        $this->y=$y;
    }

    //Get para obtener el valor de x e y.
    public function getX(): float{
        return $this->x;
    }
    public function getY(): float{
        return $this->y;
    }


    //Copiamos y modificamos un objeto sin alterar el objeto original.
    public function move(float $x, float $y){
        $localizacion = new Location($this->x + $x, $this->y + $y);
        return $localizacion;

    }
}

$localizacion = new Location(2, 5);
//$localizacion->x = 3;//No podemos modificar su valor porque es una popriedad privada y solo podemos acceder mediante el constructor.
//Accedemos a get x para ver su valor.
echo $localizacion->getX();