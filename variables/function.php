<?php

    //Las funciones no son sensibles a mayusc y minusc. 
    //Debe empezar con una letra o guion bajo.
    function saLUdo($nombre){
        echo "Hola $nombre, bienvenido/a. </br>";
    }

    saludo("Zoe");
    saludo("Sara");
    saludo("Omar");

    //Se puede expecificar el tipo de dato.
    //Con los : y un tipo de datos especificamos el return
    function suma(int $a, int $b) : int{
        return $a + $b;
        //$resultado= $a + $b;
        //return $resultado;
    }
    //Guardar return de la funcion en una variable
    $suma1 = suma(4, 8);
    echo $suma1;
    echo "</br>";
    //Imprimir directamente.
    echo suma(3, 5);
?>