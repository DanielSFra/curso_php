<?php
 // Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
 /* faça um loop while para exibir apenas os dados são strings;
 */
$arr = [4,"Daniel",true,false,"opa",12.8,"Teste",true,[],"Palavra",4,8,"Aloha"];

$x = count($arr);
$y = 0;
while($y <= $x) {
    //verifica se o elemento é uma string
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }
    $y++; // Incrementa o contador
}







?>