<?php
/* Com os operadores de conversão podemos forçar uma variável se de 
um determinado tipo;
nem todos são úteis, os mais utilizados são para converter uma string em número;
Operadores: int,bool,float,string,array,object unset;
Exemplo:$a = (float)"5.34243" # string é convertida para float
*/

$a = (int) "12";

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

//verificando se o valor foi convertido

if($a === 12){// o valor foi impresso foi feita o cast
    echo "A é idêntico a 12 ? <br>";
}


$b = (float) "3.14843824";

if($b === 3.14843824){
    echo "B é indêntico a 3.14 ? <br>";
}
//fazer o contrário para verificação

$c = (string) 34;

echo $c;
echo "<br>";

if($c === "34"){//verificamos se a string  foi convertida
    echo " C é idêntico a 3.14 <br>";
}















?>