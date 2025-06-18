<?php

// Inserindo PHP ao HTML
// como abordaro nas seções iniciais, esta é uma das principais funcionalidades PHP;
// Podemos inserir código dinâmico entre nossas tags;
// As extensões para este tipo de arquivo podem se de .php ou phtml;
//ex
//<h1><?=$titulo ?</h1>



include_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?= $nome; ?> veja as nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?>
            <ul>
                <?php foreach($celulares as $celular): ?>
                    <li><?= $celular; ?></li>
                <?php endforeach; ?>
                </ul>
            <ul>
               
            </ul>
        </li>
    <?php endforeach; ?>
</ul>