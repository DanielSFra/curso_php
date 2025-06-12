<?php

/* Como nas estruturas de if,podemos adicionar um loop dentro de outro;
O contador deve ser único,para que um loop não afete o outro;
o loop interno será executado tantas vezes quanto o loop externo for;
e em cada uma das suas execuções, serão passadas todas as suas etapas;
isso é chamado de loop alinhado;
um loop dentro do outro;

*/

$l = 1;

$n ="variavel teste";

while ($l <= 10){
    echo "loop externo $l <br>";

    // segundo contador
    $m = 1;

    echo "$n <br>";
    while ($l <= 5) {

        echo "loop interno $l <br>";

        echo "$n 2 <br>";

        $m++; // Incrementa o contador interno

    }

    $l++; // Incrementa o contador externo
}



?>