<?php

/* • A estrutura If checa se uma expressão é verdadeira
   • Podemos incluir operadores lógicos nas expressões;
   • Exemplo if(expressão) {//bloco de código}
   */

   // condição verdadeira

   if(5 > 2){
     echo " Deu certo! Entrou no if <br>";
   }


 // condição false

if (2 >= 5) {
    echo "Não vai entrar no if <br>";

}
 //utilizar op lógico

if(10 === 10 && 9 > 3){
    echo "é verdadeiro 1 <br>";
}

//variaveis

$a = 10;
$b = 5;

$c = "Deu certo, entrou no if <br>";

if($a >= $b) {
    echo $c;
}

?>