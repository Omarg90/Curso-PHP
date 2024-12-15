<?php

//Recursividad: Funcion que se llama a si misma.
//Funciona como un bucle.
function show($n){
    if($n<1){
        return;
    }

    echo "Hola " . $n . "<br>";
}

show("Omar");


?>