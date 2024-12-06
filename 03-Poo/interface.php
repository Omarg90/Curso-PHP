<?php

//Funciona parecido a las clases abstractas pero en este caso
//los metodos no tiene funcionamiento.

interface sendInterface{
    public function send(string $message);
}

interface SaveInterface{
    public function save();
}

//Cuando implementamos una interfaz, debemos construir los metodos
//dentro de la clase.
class Document implements sendInterface, SaveInterface{

    public function send($message){
        return "Se ha completado la venta " . $message;
    }

    public function save(){
        echo "Se ha guardado la venta";
    }
}

class beerRepository implements SaveInterface{
    public function save(){
        echo "Se guarda en una bd";
    }
}

//Implementamos la interfaz internamente.
class SaveProcces{

    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager)
    {
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "Hacemos algo antes </br>";
        $this->saveManager->save();
    }
}

//Da igual el objeto que creemos, ambos implementa la funcion save();

$beerRepository = new beerRepository();
$document = new Document();
$saveProcess = new SaveProcces($document);
$saveProcess->keep();