<?php
// Verifique as seguintes operações And;
// 15 > 5 and  " João === "João"
//"teste > 5 and 1
//2 == and 5>= 3

$a = 15 > 5 and  "João" === "João" ;
$b = "teste" > 5 and 1;
$c = 2 == 3 and 5 >= 3;

//comparação 1
if(15 > 5 && "João" === "João"){
  echo "Entrou no if 1 <br>";
}
//comparaçao 2
if("teste" > 5 && 1){
  echo "Entrou no if 2 <br>";
}

//comparação teste
if(10 > 5 && 1){
    echo " teste <br>";
}

//comparaçao 3
if(2 == 3 &&  5 >= 3 ){
  echo "Entrou no if 3 <br>";
}






?>