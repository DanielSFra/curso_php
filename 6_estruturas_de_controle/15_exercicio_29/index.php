<?php
/* 
Cálculo de Desconto
Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função.



*/


function calcularDesconto($valorProduto, $categoria) {
  /**
   * Calcula o valor final de um produto após aplicar um desconto baseado na sua categoria.
   *
   * @param float  $valorProduto O valor original do produto.
   * @param string $categoria    A categoria do produto.
   * @return float O valor do produto com o desconto aplicado.
   */
  if ($categoria == "eletrônicos") {
    $desconto = 0.10; // 10%
  } elseif ($categoria == "vestuário") {
    $desconto = 0.20; // 20%
  } elseif ($categoria == "alimentos") {
    $desconto = 0.05; // 5%
  } else {
    $desconto = 0.0;  // Nenhum desconto para outras categorias
  }

  $valorComDesconto = $valorProduto * (1 - $desconto);
  return $valorComDesconto;
}

// Exemplos de uso:
echo "Eletrônicos (R$1000): R$" . number_format(calcularDesconto(1000, 'eletrônicos'), 2, ',', '.') . "\n"; // Saída esperada: R$900,00
echo "Vestuário (R$200): R$" . number_format(calcularDesconto(200, 'vestuário'), 2, ',', '.') . "\n";     // Saída esperada: R$160,00
echo "Alimentos (R$50): R$" . number_format(calcularDesconto(50, 'alimentos'), 2, ',', '.') . "\n";       // Saída esperada: R$47,50
echo "Livros (R$120): R$" . number_format(calcularDesconto(120, 'livros'), 2, ',', '.') . "\n";         // Saída esperada: R$120,00
echo "Móveis (R$500): R$" . number_format(calcularDesconto(500, 'móveis'), 2, ',', '.') . "\n";         // Saída esperada: R$500,00


























?>