<?php

//Principio de cambio de Liskov.
/**
 * Este principio hace referencia a que si sustituyes una clase hija por una padre, 
 * el código debe seguir funcionando.
 */

    //Ejemplo incorrecto
class Proyecto{

    public function create(){
        echo "Se ha creado el proyecto";
    }
    //La funcion enviar, no siempre puede ser requerida en una clase hijo, ejemplo un proyecto interno donde
    //no debemos enviarlo.
    public function enviar(){
        echo "Se ha enviado el proyecto";
    }
}

class ProyectoInterno extends Proyecto{
    /**
     * Esta clase no deberia heredar el send. Lo correcto seria pasar el metodo enviar a una interfaz
     * y usarlo que aquellas clases hijo que deseamos tener esa funcion.
     * */   
}