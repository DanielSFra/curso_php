<?php 

/* 
Crie um loop que vai até o número 30;
O contador de iniciar com o 4;
Faça incrementos de 2 em 2 no contador;
Utilize o break para o loop quando chegar no número 24;

*/
$contador = 4;
$limite = 30; // define o limite do loop
while ($contador < $limite) {
    echo "Executando o loop $contador <br>";
    if ($contador === 24){
        echo " O Contador atingiu o valor 24, encerrando o loop. <br>";
        break; //Encerra o loop quando o contador for igual ou maior que 24
    }
    $contador += 2; // Incrementa o contador de 2 em 2

    }
    echo "Loop encerrado. <br>";
