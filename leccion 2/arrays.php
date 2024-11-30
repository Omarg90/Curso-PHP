<?php
    //ARRAY INDEXADO
    $nombre = [];
    //añadimos datos uno a uno
    $nombre[]="Zoe";
    $nombre[]="Sara";
    //Añadimos varios datos.    
    array_push($nombre, "Omar", "Pedro", "Ana");        
    $nombresCount = count($nombre);
    for ($i = 0; $i<$nombresCount; $i++ ){
        echo "$nombre[$i]</br>";
    }

?>