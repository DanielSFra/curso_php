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
$e = ["maça","banana","laranja"]; 

// Mensagens
// Definindo mensagens para cada tipo de dado
$msg1 = "o tipo de dado é uma String ";
$msg2 = "o tipo de dado é um inteiro";
$msg3 = "o tipo de dado é booleano ";
$msg4 = "o tipo de dado é float";



 //string
if(is_string($a)){
  echo  "$msg1  <br>";
}else{
    " O tipo de  dado não é uma string <br> ";
}

//inteiro
if(is_int($b)){
  echo  "$msg2 <br>";
}else{
    "  O tipo de  dado não é um inteiro  <br> ";
}

//booleano
if(is_bool($c)){
echo " $msg3 <br>" ;
}else{
    "O tipo de  dado não é uma booleano <br> ";
}

//float/
if(is_float($d)){
  
  echo " $msg4 <br";
}else{
    "O tipo de  dado não é uma float <br> ";
}


?>