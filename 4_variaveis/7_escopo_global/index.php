<?php
$teste = "teste";

echo "$teste global 1 <br>";

if(5>2) {
    $teste = "teste";

    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao() {
$teste = "xx";
    echo "$teste local <br>";
}


// Escopo global e local 
funcao(); {

}function testandoGlobal(){
    global $teste;
    $teste = 2;
    
    echo "$teste global função <br>";

}

testandoGlobal();

echo "$teste global 3 <br>";






















?>