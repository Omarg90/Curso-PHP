<?php

/*
Trabajaremos la herencia mediante la clase ventas 
del archivo unionType
*/
//EJERCICIO INCOMPLETO-NO MUESTRA RESULTADO.

class ventaOnline extends Venta //extends nos dice de que clase heredamos.
{

    //Añadimos una nueva propiedad propia del hijo.
    public string $metodoPago;

    public function __construct(int $id, float|int $precio, string $metodoPago)
    {
        parent::__construct($id, $precio);//heredamos constructor de la clase padre.
        $this->metodoPago = $metodoPago;
    }

    //Ver info.
    public function verInfo()
    {
        return "La id de la venta es: $this->id";
    }

}

$ventaOnline = new ventaOnline(12, 10.5, "tarjeta");
$ventaOnline->verInfo();