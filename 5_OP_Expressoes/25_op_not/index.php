<?php
// O operador lógico Not apenas inverte o resusltado booleano de uma
//operação,se é true vira false e se é false vira true;
// Simbolo !
// Exemplo: !true # false 
//Exemplo !(5 > 2)# false


/*if(5 > 2){
    echo "entrou no if teste <br>";
}
*/
if(!(5 > 2)){// true e vira false e  não entra no if
    echo "A operação 1 é veradeira 1 <br>";
}

if(!(5 > 20)){// true e vira false e  não entra no if
    echo "A operação 2 é veradeira  <br>";
}

// com variáveis

$a = 10;
$b = 20;


if(!($a >= $b)) {
   echo "A operação 3 é veradeira";
}



?>