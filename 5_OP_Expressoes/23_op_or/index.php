<?php
// operado or seu símbolo é ||
// O Operador lógico OR resulta em verdadeiro caso qualquer
// um dos lados da operação seja verdadeiro;
// E só resulta em falso caso os dois lados sejam falso;
// símbolo : ||
//exemplo ; 5 > 15 || "teste" == "teste" # true
// apenas umas das afirmativas precisa ser verdadeiro


if(5 > 15 || "teste" == "teste"){
   echo"é verdadeiro teste <br>";
}




if(5 > 2 || 3 < 4){  //true e true
   echo"é verdadeiro 1 <br>";
}

if(5 > 2 || 30 < 4){  //true  false
   echo"é verdadeiro 2 <br>";
}

if(5 > 20 || 3 < 4){  //true  true
   echo"é verdadeiro 3 <br>";
}

if(5 > 20 || 30 < 4){  //false  false não ir
   echo"é verdadeiro 4 <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;



if($a > $b || $d > $c ) { // false e true
    echo " Operação 5 é verdadeira <br>";
}


if(($a > $b || $d > $c ) && $c < $d){ // false e true
    echo " Operação 6 é verdadeira <br>";
}


if(($a > $b && $d > $c ) && $c < $d){ // false e true
    echo " Operação 7 é verdadeira <br>";
}




?>