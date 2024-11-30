<?php

$number = 0; //tipo number
$decima = 2.5; //tipo number, decimal
$name = "Omar"; //tipo string
$isTrue = true; //tipo boleano
$empty = null; //variable que existe pero no tiene valor.

//php tiene un tipado débil o dinámico. Permite declarar la misma variable con otro tipo de dato.

$number = "Hola";
echo $number;
echo ("</br>");
//Ver tipos de datos.
$number = "1"; //String
echo gettype($number); 
echo ("</br>");
//Convertir en entero. 
$number = (int)"1"; //Entero
echo gettype($number);
echo ("</br>");
//Al poner comillas detecta cadena.
echo gettype("$number");// String
echo ("</br>");
//otra forma de conversión mas explicita. Recomendada.
$number = intval("1"); //Entero.
echo gettype($number);
echo ("</br>");
echo gettype($empty);
//Las funciones y las clases permiten manejar el tipo de dato concreto que queremos.

//mostrar variable number.
?>