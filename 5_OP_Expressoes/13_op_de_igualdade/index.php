<?php
/* os operadores de comparação resultarão nos seguinte 
true ou false 
- igualdade: ==
idêntico a : ===
Diferença !=
não idêntico a: !==
Maior e maior igual a > e >=
Menor e menor igual a < e >=
*/
if(3 == 3){
    echo "Comparação verdadeira 1<br>";
}


if(3 == 4){
    echo "Comparação verdadeira 2<br>";
}


$a = 12;
$b = 12;
$c = 100;


if($a == $b){
    echo "Comparação verdadeira 3<br>";
}

if($a == $c){
    echo "Comparação verdadeira 4<br>";
}

$nome = "Daniel";
$nomeDoSistema =  "João";
$nomeDiferente = "João";

if($nome == $nomeDoSistema) {
    echo "O nome coindice <br>";

} else {

   echo "O nome não coincide <br>";

}


?>