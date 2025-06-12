<?php
/* Continue pula  uma execução do loop;
ou seja , quando o interpretador encontrar esta instrução, a próxima
etapa do loop será executada;
Novamente constumamos aplicar dentro de uma estrutura de condição;

*/

$a = 10;


while($a > 0) {
 
    if($a == 5 || $a == 7) {
        echo "Pulado o número $a <br>";

        $a--; // importante decrementar $a aqui para evitar loop infinito

        continue; // pula para  a próxima iteração do loop


    }

    if($s == 2){
        echo "Terminado o loop break $a <br>";
        break; // Encerra o loop
    }

    echo "Executando o loop $a <br>";


    $a--;
}