<?php

/*
El polimorfismo es la capacidad que tienen los metodos de las clases para comportarse de 
diferentes maneras.
*/ 


//Clase padre
class Discount{
    protected int|float $discount = 0;

    public function __construct(int|float $discount)
    {
        $this->discount = $discount;
    }
    //funcion para aplicar descuento.
    public function getDiscount($price)
    {
        echo "Se ha aplicado el descuento";
        return $price * $this->discount;
    }
}

//Clase hijo
class SpecialDiscount extends Discount{

    const SPECIAL_DISCOUNT = 2;

    //Vemos la misma funcion con el mismo nombre pero con un funcionamiento diferente.
    //Estamos sobreescribiendo el método.   
    public function getDiscount($price)
    {
        echo "Se aplica el descuento especial";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}


//Creamos un objeto de la clase hijo

$discount = new SpecialDiscount(0.1);
$specialDiscount= $discount->getDiscount(5);
echo $specialDiscount;