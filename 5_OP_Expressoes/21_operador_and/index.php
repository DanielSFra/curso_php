<?php
/* Com os operadores lógicos podemos encadear várias comparações 
- Operador AND : &&
- Operador OR: ||
- Operador Not !
*/

if(5 > 10 && 10 > 5){ // false  e  true
   echo "Entrou no if 1 <br>";
}
if(50 > 10 && 10 > 5){ // true e true
   echo "Entrou no if 2 <br>";
}


if(50 > 10 && 10 > 500){ // true e false
   echo "Entrou no if 1 <br>";
}

if(50 > 100 && 10 > 500){
   echo "Entrou no if 4 <br>";
}

$a = 9;
$b = 4;
$c = 85;
$d = 85;

if($a > $b && $c == $d){
   echo "Entrou no if 5 <br>";
}

if($b <= $a && $c >= $d){
   echo "Entrou no if 6 <br>";
}

if($b === $a && $c > $d){
  echo  "Entrou no if 7 <br>";
}

if(($b <= $a && $c >= $d) && $a > $b) {
  echo  "Entrou no if 8 <br>"; // duas confirmações uniu o duas afirmações
  
}

if($b <= $a && $c >= $d && $c === $a) {
  echo  "Entrou no if 9 <br>"; // duas confirmações a última não é positiva
  
}


?>