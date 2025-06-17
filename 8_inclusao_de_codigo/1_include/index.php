<?php

include "teste.php";

// Com o include inserimos um arquivo PHP, ou até um HTML, em outro;
//Podemos assim utilizar tudo que está declarado no arquivo incluído;
//o include não gera erro fatal se o arquivo não existir e sim um warning;
// exemplo: include "arquivo.ext"

?>
<p>Ápós o include </p>
<p>Imprimindo d <?php echo $d; ?></p>