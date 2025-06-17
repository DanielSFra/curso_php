<p>Testando</p>

<?php

require "teste.php";

// com o require inseriomos um arquivo de php, ou até mesmo HTMl, em outro;
// Podendo assim utilizar tudo que está declarado no arquivo incluido.
// O require gera erro fatal se o arquivo não existir,parando o script;
//Exemplo:
// require "arquivo.ext"


?>
<p>Arquivo do include</p>

<?php

 require "arquivos/funcao.php";

?>