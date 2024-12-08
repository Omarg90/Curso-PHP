<?php

//Normalmente, los namespace deben tener el nombre de su carpeta.
//Agrupan distintas clases bajo un espacio de trabajo, nos permite distinguir
//posibles clases con un mismo nombre si estan en difentes namespace.
namespace Utils;

class Operacion{

    public function suma(int $a, int $b){
        return $a + $b;
    }
}