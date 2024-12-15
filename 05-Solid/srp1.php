<?php

/**
 * Los principios solid nos ayudan a tener un código mantenible, que puedas
 * mantener y escalar con el tiempo.
 */



/**
 * 1º-Principio de responsabilidad unica.
 * Nos indica que cada clase debe tener una responsabilidad.Por ejemplo, una clase
 * que haga un guardado en una base de datos, no debe hacer tambien envio de correos.
 * Asi al realizar un cambio afecta en menor medida al resto del código.
 */

//El siguiente ejemplo no cumple estos requisitos. La clase pedido no deberia de manejar
//el envio de un correo electronico, ya que si mas adelante se enviase una notificacion
//tendriamos que cambiar la clase pedido.

/*
class Pedido
{

    private $productos = [];
    private $total;

    public function addProducto($descripcion, $precio)
    {
        $this->productos[] = [
            'descripcion' => $descripcion,
            'precio' => $precio,
        ];
        $this->total += $precio;
    }

    public function crearPedido()
    {
        echo "Se ha creado el pedido";
        $this->enviarMail();
    }

    public function enviarMail()
    {
        echo "Se envia el correo";
    }
}
*/


//Aqui tenemos la clase pedido, y quitamos las responsabilidad de enviar un correo.
class Pedido{
private $productos = [];
private $total;


public function verTotal()
{
    return $this->total;
}

public function addProducto($descripcion, $precio)
{
    $this->productos[] = [
        'descripcion' => $descripcion,
        'precio' => $precio,
    ];
    $this->total += $precio;
}

public function crearPedido()
{
    echo "Se ha creado el pedido";
}
}

class EnviarMail{

public function enviar(Pedido $pedido)
{
    echo "Mensaje del pedido, total:" . $pedido->verTotal();
}
}

$pedido1 = new Pedido();
$pedido1->addProducto("Tomates", 3);
$pedido1->addProducto("Lechuga", 1.20);
$pedido1->addProducto("Cebolla", 2.50);

$correo = new EnviarMail();
$correo->enviar($pedido1);