<?php
// com o operador não identico a verificamos se um valor é diferente de
// outro, avaliando o seu tipo também;
// O símbolo é : !==
//Exemplo: 5!== 4 #false
// Exemplo : 3 !== "3" # true 

$a = 1;
$b ="1";


if($a != $b) {
    echo "A é difente de B 1 <br>";
}


if($a !== $b) {
    echo " A é  diferente de B 2 <br>";


}

if(1 !== 2) {
    echo "Não é identico 1 <br>";

}

if(1 !== 1) {
    echo "não é identico 1 <br>";

}