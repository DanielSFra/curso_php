<?php

$pessoa = ['nome' => 'Daniel',
'idade' => '40',
'profissão' => 'Analista de Sistemas',
'graduação' => 'Sistemas de Informação',
];
echo "<br>";
print_r(($pessoa));
$nome = $pessoa['nome'];

$maioridade = 18;

if($pessoa['idade'] >= $maioridade) {
    echo "$nome é maior de idade";
}


//desafio; criar um if de idade maior que 18 anos

/*if($pessoa['idade']>= 18){
    echo "<br> $nome é maior de idade";
} else{
    echo "<br> $nome é menor de idade";
}*/
    


?>