<?php
// Strings são seguências de números, letras e símbolos.
// pode-se usar aspas simpes ou duplas.


$str = "Daniel";
$num = 9;

if(is_string($str)){
    echo "$str é uma string 1<br>";   
}

if(is_string($num)) {
    echo "$num é uma string 2<br>";
}


if(is_string("asd")) {
    echo "É uma string 3<br>";
}

?>