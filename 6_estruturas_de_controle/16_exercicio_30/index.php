<?php

/* 
Escreva uma função chamada verificarCategoria que recebe um parâmetro de entrada representando uma categoria.

A função deve retornar uma mensagem de acordo com a categoria fornecida:

Se a categoria for "eletrônicos", retornar "Essa categoria é de produtos eletrônicos".

Se a categoria for "vestuário", retornar "Essa categoria é de produtos de vestuário".

Se a categoria for "alimentos", retornar "Essa categoria é de produtos alimentícios".

Para qualquer outra categoria, retornar "Categoria desconhecida".

O parâmetro de categoria será sempre fornecido como uma string.

*/

/*function verificarCategoria($categoria) {
    if($categoria == "eletrônicos"){
        return "Essa categoria é de produtos eletrônicos";
    } elseif($categoria == "vestuário"){
        return "Essa categoria é de produtos de vestuário";
    } elseif($categoria == "alimentos"){
        return "Essa categoria é de produtos alimentícios";
    } else {
        return "Categoria desconhecida";
    }
}
//testando a função
echo verificarCategoria(("eletrônicos <br>"));// Essa categoria é de produtos eletrônicos
echo verificarCategoria(("vestuário <br>"));// Essa categoria é de produtos eletrônicos
echo verificarCategoria(("alimentos <br>"));// Essa categoria é de produtos eletrônicos */



function verificarCategoria($categoria){
    switch($categoria){
        case "eletrônicos": // Corrigido de ; para :
        return "Essa categoria é de produtos eletrônicos";
        case "vestuário": // Corrigido de ; para :
        return "Essa categoria é de produtos de vestuário";
        case "alimentos": // Corrigido de ; para :
        return "Essa categoria é de produtos alimentícios";
        default:
        return "Categoria desconhecida";
    }
}

// Testando a função
echo verificarCategoria("eletrônicos"); // Passe apenas "eletrônicos"
echo "<br>"; // Adicione o <br> fora da chamada da função se quiser uma quebra de linha
echo verificarCategoria("vestuário");
echo "<br>";
echo verificarCategoria("alimentos");
echo "<br>";
echo verificarCategoria("livros"); // Testando uma categoria desconhecida

?>
