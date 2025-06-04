<?php
$s = 10;

$d =& $s; //$d é uma referência para $s

echo $d;
echo "<br>";

echo $s;
echo "<br>";

$d = 20;


echo "Atribuição após ref 20";
echo "<br>";
echo $d;
echo "<br>";
echo $s;
echo "<br>";
echo "Atribuição após ref 20";
echo "<br>";

$nome ="Daniel Francisco";

$nome2 =& $nome; // $nome2 é uma referencia para $nome

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";


$nome2 = "Adrian";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";



?>