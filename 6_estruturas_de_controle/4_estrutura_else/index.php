<?php
// estrutura else
// A Estrutura else pode executar um outro bloco de código, isso acontece
//quando a expressão de if é falsa;
// em else não inserimos expressões;
// exemplo:
// if(exp){
//}else{
//}

if (5 > 2){
    echo "Entrou no if <br>";

} else{
  echo "Entrou no else <br>";  
}


if("teste" === 5){
  echo "Entrou no if 2 <br>";
} else{
  
  echo "Entrou no else 2 <br>";  
}

// variaveis 

$a = 10;
$b = 20;


if($a > $b){
 //não inseri dado não somos obrigados a inserir no if  e no else    
} else{
  echo " Entrou no else 3!<br>";  
}

$msg = " Entrou no else 4! <br>";

if($a > $b){
 //não inseri dado não somos obrigados a inserir no if  e no else    
} else{
  echo  $msg;  
}





?>