<?php

/* Crie uma variável que receber uma velocidade de um carro;
   Depois cria uma estrutura if que verifique essa velocidade; 
   Se a velocidade for menor que 40, imprima que o motorista está na velocidade permitida;
 
   Se igual a  40, imprima que  uma  mensagem para o motorista reduzir a velocidade;
   Se fomr maior que 40, imprima uma mensagem que o motorista ultrapassou a velocidade permitida;
*/


$velmedia = 40;
if($velmedia < 40){
    echo " Motorista esta na velocidade permitida <br>";

}   if($velmedia == 40){
    echo " Motorista tome cuidado! , reduza a velocidade !! <br>";
} else {
    echo " Motorista Ultrapassou a velocidade permitida, Sujeito a  multa! <br>";
}


// velocidade igual a 40 km/h
if($velmedia == 40){
    echo " Motorista esta na velocidade permitida !@@!<br>";

}   if($velmedia > 40){
    echo " Motorista tome cuidado! , reduza a velocidade <br>";
} else {
    echo " Motorista Ultrapassou a velocidade permitida, Sujeito a  multa!!!!!!! <br>";
}

 //velocidade maior que 40 km/h
if($velmedia > 40){
     echo " Motorista Ultrapassou a velocidade permitida, Sujeito a  multa! <br>";
} if($velmedia == 40){
    echo " Motorista esta na velocidade permitida <br>";
} else{
  echo" Motorista tome cuidado !, reduza a velocidade <br>";
}


?>