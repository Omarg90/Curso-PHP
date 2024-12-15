<?php

//Una funcion que salude a todos los empleados de una empresa!.

class Empleado{

    public array $empleados = ["Omar", "Sara", "Domingo", "Lali", "Zoe", "Tomas", "Tere", "Saul", "Cristofer", "María"];

    public function saludo(){
        foreach($this->empleados as $empleado){
            echo "Hola " . $empleado  . ", buenos días.<br>";
        }
    }

}

$empleados = new Empleado();
$empleados->saludo();