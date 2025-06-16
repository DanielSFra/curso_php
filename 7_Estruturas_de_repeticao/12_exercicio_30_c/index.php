<?php
// Crie um array de 10 a 20 com o for;
// Faça um loop em cima do array criado dinamicamente;
//Imprima apenas os números ímpares;


$arr = []; //array vazio
for($i = 10; $i <= 20; $i++){;//lool com as informações do itens do for array inicial de 10,variável utilizada e definição até 20, e variavel e atribuição
    array_push($arr, $i); // função php array push insere o será utilizado dentro do array a variavle do arra $arr e a variável $i dentro da função php
    
}
print_r($arr);// serve para imprimi as informações dentro do array com indices
echo ".<br>";

for($i = 0 ; $i < count($arr); $i++){// segundo for como no anterios com todas as inf, que serão usadas dentro do loop
  
    if($arr[$i] % 2 != 0){ // condição if e o que ir usar a variável do array, $arr[$i] e condição % 2 != 0 = diz que o resto da divisão de 2 se for diferente
       //de  0 será números ímpares
      echo "Número ímpar: $arr[$i]<br>"; // echo que será impresso apenas os número ímapares de 10 a 20
    }

} 






?>