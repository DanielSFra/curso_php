<?php

/* 
• Com o else if podemos criar um novo bloco de expressão;
• Este Bloco será executado caso o primeriro if seja falso;
• O else if fica entre o if e o else;
• Exemplo:
 if(exp){
 }else if(exp2){
 }
*/

 //else if
if(10 > 5){
    echo " Entrou no if <br>";


    } else if(10 > 6) {
        echo " Entrou no else if <br>";
    }

// else verdadeiro

if(10 < 5){
    echo " Entrou no if <br>";


    } else if(10 > 6) {
        echo " Entrou no else if 2 <br>";
    }



//todos falso e nenhuma opção será executada

if(10 < 5){
    echo " Entrou no if <br>";


    } else if(10 > 6) {
        echo " Entrou no else if  3 <br>";
    }

//else 4

if(10 > 5){
    echo " Entrou no if 4 <br>";


    } else if(10 > 6) {
        echo " Entrou no else if 4 <br>";

    }else if(11 > 1) {
       
        echo " entrou no else if 2 4 <br>";
} else {

}

echo " Entrou no else 4 <br>";

$a = 10;
$b = 20;
$msg = "Entrou no else if";


if(10 > 5){
    echo " Entrou no if 4 <br>";


    } else if($a > $b) {
        echo " Entrou no else if 4 <br>";

    }else if(11 > 1) {
       
        echo " entrou no else if 2 4 <br>";
} else {

}







?>
