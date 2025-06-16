<?php
//
//* A for é com ceteza a estrutura de repetição mais utilizada;
//* Sua sintax é mais organizada, em apenas uma linha e aparenta ser mais difícil,
//ao primeiro olhar;
//exemplo:
//for(contador;condicao;incremento){
//   codigo


$j = 0;
$nome = "Daniel";

for($i = 0; $i < 10; $i++){


    if($i == 4){
      echo "$nome <br>";
    }

    if($i== 8){
        break;
    }


    echo "Testando for $i <br>";
}







?>