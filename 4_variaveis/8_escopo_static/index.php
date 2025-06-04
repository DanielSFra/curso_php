<?php
//Escopo Estático

function teste(){

$a = 0;
$a++;

echo "$a <br>";

}

teste();
teste();
teste();

function testestatic(){

static $a = 0;
$a++;

echo "$a <br>";

}

teste();
teste();
teste();

//com o static,avariavel $a não é reinicializada  a caa chamada  da função














































?>