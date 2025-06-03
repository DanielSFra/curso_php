<?php
// Insira o valor  5 em uma variável, e o valor 3 outra; 
// Teste os os operadores de igualdade,diferença e idêntico e não identinco
// relembrando os operadores de comparação
/* Operador de igualdade ==
 Operador de idêntico  ===
 operador de  diferente !=
 operador de  não idêntico representado por !==
*/

$a = 5;
$b = 3;
//igual
if(3 == 3){
    echo "3 é igual a 3 ? <br>"; // irá mostrar que é igual
}

// idêntico
if(5 === 5){
    echo "é  5 idêntico a 5? <br> "; // não irá mostrar porque 5 não é idêntico a 3, mas mudei para ele aparecer
}

// diferente

$usuario = "Daniel";
$usuarioSistema = "Daniel Francisco";
$logado = "você está logado!";
$naologado = "verfique usuário ou senha!";

if($usuarioSistema != $usuario){
    echo "efetue o login $naologado <br> ";
} else{
    echo "Bem-vindo Daniel Francisco $logado <br>"; //condição não logado
}

if($usuarioSistema !== $usuarioSistema){
    echo "efetue o login  $naologado";
} else {
    echo "Bem-vindo, Daniel Francisco! $logado <br>"; //condição logado
}
 // fiz diferente dos exemplos do professor, achei uma maneira mais criativa

// agora com o exemplo dele vammos lá


if($a == $b){
    echo " A é igual a B ? <br>";
}

if($a != $b){
    echo " A é difente de B ? <br>";
} 

if($a === $b){
    echo "A é idêntico a B <br>";
}

if($a !== $b){
 echo " A não é idêntico a B? <br>";
}



?>