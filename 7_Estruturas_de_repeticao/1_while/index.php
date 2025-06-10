<?php


// Estruturas de Repetição - While
// O loop while executa um bloco de código enquanto uma condição for verdadeira.
// Exemplo 1 Contagem  de 1 a 10
//$contador = 1;
//while ($contador <= 10) {
   // echo " Contador : $contador <br>";
   // $contador++; // Incrementa o contador
//}

// inicio / definição do contador
$x = 0;
while ($x < 10) {
    //corpo do loop
echo $x . "<br>";
    //incremento do contador

     //
    $x  ++;
}

echo "Continuando código <br>";


$y = 0;
while ($y < 10) {
    //corpo do loop
echo $y . "<br>";
    //incremento do contador

     //
    $y = $y +2; // ou +=
}

echo "Continuando código <br>";

$z = 10;
while ($z > 0) {
    //corpo do loop
echo $z . "<br>";
    //incremento do contador

     
    $z --;
}

echo "Continuando código <br>";

//a definição do contador

$a = 10;

// Inicio / Definição da estrutura 

while ($a > 0) {

    //corpo do loop

if($a % 2!= 0){
echo $a . "<br>"; //Imprime apenas os números ímpares
}
    //incremento do contador

$a --;
}
echo "Continuando código <br>";









?>

