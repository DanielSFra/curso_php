<?php
// Escopo local

$x = 10; //varável global

echo "$x global <br>";

function teste(){

    $x = 5; // variável local
    
    echo "$x local <br>";
}
teste();

function testando(){

    $x = 12; 
    
    echo "$x local2 <br>";
}

$x = 99; //variavel global alterada

testando();

teste();
echo "$x global <br>";































?>