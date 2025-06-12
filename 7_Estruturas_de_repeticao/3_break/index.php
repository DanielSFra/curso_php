<?php


 //* podemos sair de um loop while antes do seu fim;
 //* Para isso é necessário adicionar a palavra reservada break;
 //* Apos integrada, o loop será  automaticamente finalizado
 //* Geralmente inserimos  esta instrução em uma condição if;



$X = 0;
while ($x < 10) {
    echo " O X é $x <br>";

     if($x === 5) {
        echo "Terminando o loop <br";
        break; // Encerra o loop quando x for igual a 5
    }

    $x++;
}

echo "Saiu do loop <br>";









?>