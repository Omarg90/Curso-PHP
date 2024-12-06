<?php

/*
La clase abstracta es como la base o el molde de una clase, pero no se 
puede crear objetos de estas. Si pueden las clases que heredan de esta.
*/

abstract class Product{

    //Utilizamos propiedades de un producto que sabemos que no van a cambiar,
    //Por ejemplo, un producto siempre tendra un nombre y un precio.
    protected string $name;
    protected float $price;

    //Método sin funcionamiento, no tiene las llaves.
    abstract public function calculatePrice():float;

    //Método con funcionamiento, tiene llaves.
    public function getName():string{
        return $this->name;
    }
}

class Beer extends Product{

    const iva = 0.21;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function calculatePrice():float
    {
        $ivaPrice = $this->price * self::iva;
        $totalPrice = $this->price + $ivaPrice;
        return $totalPrice;
    }

}
//Creamos una funcion fuera de la clase y accedemos a la funcion calcular precio.
function showInfo(Product $product){
    echo "$" . $product->calculatePrice();
}
$dorada = new Beer("Dorada", 2.50);
echo $dorada->getName();
echo $dorada->calculatePrice();

showInfo($dorada);
//no podemos acceder al nombre porque esta protegido, por hacemos antes el uso de getName
//echo $dorada->name;