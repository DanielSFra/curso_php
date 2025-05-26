<?php

$carro = ['marca' => 'Fusca', 
'ano' => 1980, 
'cor'=> 'azul',
'blindado' => false,
'preco' => 15000.00,];


echo "<br>";
print_r($carro); 

$marca = $carro['marca'];
$ano = $carro['ano'];
$cor = $carro['cor'];
$preco = $carro ['preco'];

echo " O Carro está bem consevado <br> é um $marca é da cor $cor e do ano $ano ésta bem conservado,<br>  estou pedindo o valor de $preco é 
um bom preço para um caro deste tipo.";





?>