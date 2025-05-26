<?php

class Pessoa
{
    function falar(){
        echo "olá,Pessoal!";
    }
}

$daniel = new Pessoa();

$daniel->nome = "Daniel";

echo $daniel->nome;

echo "<br>";

$daniel->falar();
echo "<br>";

?>

