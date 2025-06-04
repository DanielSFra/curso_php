<?php

/* Com estes operadoreas atribuir valor variável;
O mais conhecido é o =, porém temos algumas variações do mesmo
Operadores : +=, -=, *= e %=;
cada um destes fará uma operação antes da atribuição.
*/

// += adição 
$a = 0;
$a += 10; // $a = $a + 10
echo $a . "<br>";

// -= subtração
$b = 0;
$b += -5; // $b = $b - 5
echo $b . "<br>";


// *=  multiplicação
$c = 5;
$c *= 2; // $c = $c * 2
echo $c . "<br>";



// /=  divisão
$d = 5;
$d /= 2; // $d = $d / 2
echo $d . "<br>";


// %=  resto
$e = 5;
$e %= 2; // $e = $e % 2
echo $e . "<br>";


// como variáveis

$f = 10;
$x = 20;


$f += $x;  // $f = $f + $x

echo $f . "<br>";

$D = 85;
$J = 55;

$D += $J; // $D = $D + $J

echo $D . "<br>";



$c = 11;
$m = 4;

$c /= $m; // $c = $c / $m

echo $c . "<br>";





?>