<?php 

/* 
 Crie algumas variáveis com tipos de dados diferentes : string,int e
boolean, por exemplo;
cheque se a variável é um inteiro;
Caso sim, apresente uma msg confirmando o tipo de dado;
caso não apresente outra mensagem

*/

$a = "Daniel";
$b = 40;
$c = true;
$d = 12.4;

$msg1 = "o tipo de dado é uma String ";
$msg2 = "o tipo de dado é um inteiro";
$msg3 = "o tipo de dado é booleano ";
$msg4 = "o tipo de dado é float";

 //string
if(is_string($a)){
  echo  "$msg  <br>";
}else{
    " o tipo de  dado não é uma string <br> ";
}

//inteiro
if(is_int($b)){
  echo  "$msg2 <br>";
}else{
    "  o tipo de  dado não é um inteiro  <br> ";
}

//booleano
if(is_bool($c)){
 $msg3 ;
}else{
    "o tipo de  dado não é uma booleano <br> ";
}

//float/
if(is_float($d)){
   $msg4;
}else{
    "o tipo de  dado não é uma float <br> ";
}





?>