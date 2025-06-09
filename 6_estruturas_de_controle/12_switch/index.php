<?php
/* 
O switch éuma estrutura de condição, que pode substituir o if em alguns casos;
Podemos adicionar a instrução break, para ele não ser mais executado;
Há a possibilidade também de adicionar a instrução default, que é executada caso nenhuma condição seja satisfeita;

*/

$x = 5;
switch($x) {

case 0:
  echo " X é igual a 0 <br>";
  break;
case 1:
      echo "X é igual a 1 <br>";
      break;

      default:
      echo " não é igual a nenhum dos valores mencionados <br>";
   
   
   
   
    }

    // outro exemplo

    $y = "Daniel";
switch($y) {

case "Daniel":
  echo " O nome é Daniel <br>";
  break;
case "João":
      echo " O nome é João <br>";
      break;

      default:
      echo " O nome não foi encontrado <br>";
   
   
   
   
    }
