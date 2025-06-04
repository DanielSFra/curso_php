<?php
/* 
 Converta os seguintes dados para int com o operador cast
lembrando que para converter é só colar o que precisa ser convertido 
() conforme fizemos na aula interior:
"testando" 
true
[1,2,3]
E veja os resultados
*/

 $a = (int) "testando";
 echo  $a;
 echo "<br>";

 

 $b = (int) 12.9;
 echo $b;
 echo "<br>";


 $c = (int) true;
 echo $c;
 echo "<br>";


$d = (int) [1,2,3];
 echo $d;
 echo "<br>";



$e = (int) "asd";
 echo $e;
 echo "<br>";

$f = (int) 5;
 echo $f;
 echo "<br>";

$g = (int) [1,2,3,4,5,6];
 echo $g;
 echo "<br>";



// fiz coisas a mais pensando ser mais complexo era só para imprimir 

?>