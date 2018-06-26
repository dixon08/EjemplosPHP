<?php
#Todas las variables se comienzan con el signo $
//Variable int
$numero = 5;
echo "Esto es una variable Numero: $numero <br>";
var_dump($numero);
echo "<br><br>";
//Variable String
$palabra = "palabra";
echo "Esto es un texto : $palabra <br>";
var_dump($palabra);
echo "<br><br>";
#Variable bobleana
$boleana = true;
echo "Esto es una variable boleeana : $boleana <br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores=array("rojo", "amarillo");
echo "Esto es una variable Arreglo : $colores[0]<br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con propiedaes
$verduras =  array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
var_dump($verduras);
echo "Esto es una variable Arreglo : $verduras[verdura1]";
echo "<br><br>";

#variable Objeto
$fruta = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable Arreglo : $fruta->fruta1";
var_dump($fruta);
echo "<br><br>";
 ?>
