<?php


$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescentes"; 
$categorias[] = "adulto";
$categorias[] = "idoso";
//print_r($categorias);

$nome = "Eduardo";
$idade= 6;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade<= 12)
{
  for($i = 0; $i <= count($categorias); $i++)
  {
    if($categorias[$i] == "infantil")
       echo "O nadador ".$nome." compete na categoria infantil";

       
  }
}