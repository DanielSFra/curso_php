<?php 
/* 
• Crie variáveis com número e outras com string;
• Faça um if checando se é um número;
• Caso for, atribua a multiplicação deste número por2 em outra variável;
• E crie um outro if, que se chaga se o número é maior que 100;
• Se sim, imprima uma menssagem dizendo que o número é maior que 100;
*/
 //números
$numero1 = 30; 
$numero2 = 100;

//letras
$letra1 = "A";
$letra2 = "J";

//verificando se é um número é maior que 100
if(is_numeric($numero2)){
    //multiplicando por 2
    $resultado = $numero2 * 2;
    //verificando se o número é maior que 100
    if($resultado > 100){
        echo " o número $resultado é maior que 100 <br>";
    }
}

// vericiando que é menor que 100
if(is_numeric($numero1)){
    //multiplicando por 2
    $resultado = $numero1 * 2;
    //verificando se o número é maior que 100
    if($resultado < 100){
        echo " o número $resultado é menor que 100 <br>";
    } else{
        echo  "O $resultado é maior que 100 <br";
    }
}




 //verificando que é uma letra
if(is_string($letra1)|| is_int($numero1)){
    //multiplicando por 2
    $resultado = $numero2 * 2;
    //verificando se o número é maior que 100
    if($resultado < 100){
        echo " o número $resultado é maior que 100 <br>";
    } else{
        
        
      echo " a Variável  não é  um número é uma letra <br>";
    }
}
