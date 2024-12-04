<?php

/*
unionType hace referencia a la variedad de tipos que puede tener
una misma variable o propiedad.
*/

class Venta{

    public int $id;
    //Decimos que el precio puede ser entero o decimal.
    public float|int $precio;
    public static array $ventas = [];

    public function __construct(int $id, float|int $precio)
    {
        $this->id = $id;
        $this->precio = $precio;
    }

    public static function nuevaVenta(int $id, int|float $precio){
        $venta = new Venta($id, $precio);//usando el constructor
        self::$ventas[] = $venta;
        return $venta;
    }

    public static function verVentas()
    {
        foreach (Venta::$ventas as $venta){
            echo ("Id: " . $venta->id . "-- Precio: " . $venta->precio);
        }
    }
}

Venta::nuevaVenta(5,1.50);
Venta::verVentas();
