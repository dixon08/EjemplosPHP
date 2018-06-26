<?php
function saludo(){

echo "hola<br>";

}

saludo();

#Funciones con parametro
function despedida($adios){
  echo $adios. "<br>";
}
despedida("chao");

#Funciones con retorno

function retorno($retornar){
  return $retornar;
  }
echo retorno("retornar");


 ?>
