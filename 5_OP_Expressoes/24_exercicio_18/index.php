<?php
/* Verifique as seguintes operações com OR; 
12 < 5 OR "João" === "João"
1 > 5 OR 1
20 === "20" AND 51 >=31
*/

if(12 < 5 or "João" === "João"){
    echo " é verdadeiro 1 <br>";
}

if(1 > 5 or 1 ){
    echo " é verdadeiro 2 <br>";
}

if(20 === "20" AND 51 >= 31 ){ //compara os tipos 20 é diferente de "20" string
    echo " é verdadeiro 3 <br>";
}

//comparação teste

if(20 == "20" && 51 >= 31 ){
    echo "a operação teste é verdadeira  <br>"; //não compara os tipos
}