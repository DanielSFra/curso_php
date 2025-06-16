<?php
// O do while é também uma estrutura de repetição;
//Porém menos utilizada que o while;
// A sintaxe é invertida, vej um exemplo


$j = 0;

$teste = "Daniel";

do {

  echo "Testando do while $j <br>";

if($j == 2){
    echo "$teste <br>";
}

  
 $j++;



} while($j < 10);

$i = 10; //com decremento

$teste2 = "Daniel Francisco";


do {

 echo "testando do while 2 $i <br>";

 if($i == 2){
    echo "$teste2 <br>";


 }
 
 $i--;

}while ($i > 0);








?>