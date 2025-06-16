<?php

// A  Foreach também é uma estrutura de repetição
//porém  ela é orientada a um array, devemos utilizar um para que a estrutura repita
// em todos os elementosdo mesmo/
// exemplo:
//foreach ($array as $item){
//}


$nomes = ["Daniel","João","Alzira","Alice"];
$a = 10;

foreach($nomes as $nome){
echo " O nome o índice atual é  $nome <br>";
 
if($nome == "Daniel")
echo "Carioca $a <br>";

}





?>