<?php
/* 
• Faça as seguintes verificações em estruturas if:
• 5 é maior que 2?
• Daniel é diferente de João ?
• 12 é menor ou igual a 11 ?
• você dever inserir os valores em variáveis
*/

$a = 5;
$b = 2;

$c = "Daniel";
$d = "Joao";

$e = 12;
$f = 11;


// primimeiro exercicio
if($a > $b){
echo " 5 é maior que 2 <br>";
}

// segundo exercicio
if($c != $d){
echo " Daniel é diferente de João <br>";

}

// terceiro exercicio 

if($e <= $f){//não irá imprimir
   echo " 12 não é menor e nem igual a 11<br>";
}


// terceiro exercicio 2

if($e >= $f){// irá imprimir pois 12 é maior que 11
   echo " 12 não é menor e nem igual a 11<br>";
}






?>