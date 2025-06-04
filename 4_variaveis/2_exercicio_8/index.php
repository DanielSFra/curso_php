<?php
$nome = " Daniel";
$caractristicas = [
	"cor do cabelo" => "preto",
	"cor dos olhos" => "pretos",
	"peso" => "123 quilos",
	"altura" => 1.83,
    "hobby"  => "assistir filmes e séries"
];

$estado ="Rio de janeiro";
$idade = 40;
echo "Meu nome é $nome, tenho $idade anos, moro no estado do $estado<br>";
echo "Minhas características são:<br>";
/*foreach ($caractristicas as $chave => $valor) {
	echo "$chave: $valor<br>";
}*/ #essa maneira é a que o professor ensinou com print_r
print_r($caractristicas)

?>
