<?php

/**
 * Principio de abierto cerrado (open/close principle) (Cerrado para modificacion abierto para extencion.)
 * Este principio hace referencia a que los métodos o funciones ya establecidas podriamos
 * añadir nuevas caracteristicas en un futuro pero no hemos de modificar lo existente si ya funciona.
 */

//Este código no cumple este principio. Si queremos eliminar una operacion estamos modificando el código de la funcion
//Seria mejor el caso del siguiente ejemplo.
/*
class Calculadora{
    public function calcular($a, $b, $op)
    {
        if ($op == "suma"){
            return $a + $b;
        }elseif($op == "resta"){
            return $a - $b;
        }elseif($op == 'mul'){
            return $a * $b;
        }
    }
}
    */

//-------------------------Ejemplo correcto.----------------------

//En el siguiente ejemplo podemos añadir nuevas funcionalidades como la division sin afectar a ninguna funcion o metodo anterior.
//Ademas podemos elimar cualquier funcion sin afectar al resto del código,

interface OpInterface{
    public function calcular(int|float $a, int|float $b);
}

class suma implements OpInterface{
    public function calcular(int|float $a, int|float $b)
    {
        return $a + $b;
    }
}

class resta implements OpInterface{
    public function calcular(int|float $a, int|float $b)
    {
        return $a - $b;
    }
}

class multi implements OpInterface{
    public function calcular(int|float $a, int|float $b)
    {
        return $a * $b;
    }
}

class Calculadora{
    
    private OpInterface $op;

    public function __construct(OpInterface $op)
    {
        $this->op = $op;
    }

    public function calcular(int|float $a, int|float $b)
    {
        return $this->op->calcular($a, $b);
    }
}

$suma = new suma();
$calculo = new Calculadora($suma);

echo $calculo->calcular(2.5, 4);