<?php

// Como uma técnica semelhante ao short tags, podemos exibir contúedo sem o echo;
// Ótima estrateǵia para resumir as chamadas PHP apenas para exibição de valores;
// Ex: 
// <?="teste;

$nome = "Daniel";
$sobrenome = "Francisco";

?>

<?= $teste = "asd";?>

<form action="">

<div>
    <input type="text" value="<?= $nome; ?>">
</div>
<div>
    <input type="text" value="<?= $sobrenome; ?>">
</div>
<div>
    <input type="submit" value="Enviar">
</div>
</form>