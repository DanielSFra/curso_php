<?php
// crie um array 1 a 10;
// Utilize um loop for para criar este array;
// Dica: você pode utilizar o método array_push(arr,elemento) para inserir
//um elemento em um array;
// Imprima o array criar com print_r
//crie um loop igual a 100
//interrompe o loop na metade ou em 50
/*$array = array(); // $arr = [];
for($i = 1; $i <= 10; $i++){
	array_push($array, $i);
}
print_r($array);*/


$arr =  [];

for($i = 1; $i <=100; $i++){
    array_push($arr,$i);
    
    if($i == 50){ // Se $i for a 50
    break; // interrompe o loop fo
    }
    

} print_r($arr);





?>