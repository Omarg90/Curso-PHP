<?php

/*
En php no se puede heredar de varias clases,
para eso se usan los traits
*/

trait EmailSender{

    //El trait puede tener metodos y propiedades.
    public function sendEmail(){
        echo "Se envia el email.";
    }
}

trait Db{
    public function save(){
        echo "Se guarda algo en la bd</br>";
    }
}

trait Log{
    public function log(string $message, string $fileName){
        if(!file_exists($fileName)){
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s"). " - ". $message . "\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice{
    use EmailSender, Db, Log;

    public function create(){
        echo "Se creo la factura</br>";
        $this->log("Se creo la factura", "log.txt");
    }
    

}

$prueba = new Invoice();
$prueba->sendEmail();
$prueba->save();
$prueba->create();