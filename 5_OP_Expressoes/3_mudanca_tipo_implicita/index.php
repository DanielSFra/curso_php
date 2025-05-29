<?php 
//Mudança de tipo implicita
echo 5/2;
echo "<br>";


if(is_float(5/2)) {
    echo " É float <br>";
}


echo 2 . 3;
echo "<br>";

if(is_float(2.3)){
    echo " É float <br>";
}

if(is_string(2.3)){
    echo " É string <br>";
}

$nome = "Daniel";
$sobrenome = "Francisco";

$nomeCompleto = $nome."   ".$sobrenome;

echo $nomeCompleto;
echo "<br>";











?>