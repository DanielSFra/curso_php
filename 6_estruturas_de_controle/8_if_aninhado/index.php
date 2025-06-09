<?php

/* 
• Podemos também inserir um if dentro de outro if
• Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if;
• Exemplo
if(condição1){
    // código 1}
    if(condição2 {})
*/
if(10 > 2) {
    echo " Entrou no primeiro if <br>";
    if("teste" == "teste"){
        echo " Entrou no segundo if <br>";
    }
}



if(10 < 2) {
    echo " Entrou no primeiro if 2 <br>";
    if("teste" != "teste"){
        echo " Entrou no segundo if 2 <br>";
    }else{
        
        echo "Entrou no segundo else 2 <br>";
    }

} else{

} echo " Entrou no primeiro else <br>";


$escopo = 10;

if(10 > 2) {
   
    echo " Entrou no primeiro if 2 <br>";
     $escopo2 = 20;
    if("teste" == "teste"){
        echo " Entrou no segundo if 2 <br>";
        
        echo $escopo;
        echo "" . $escopo2;

    }else{
        
        echo "Entrou no segundo else 2 <br>";
    }

} else{

} echo " Entrou no primeiro else <br>";