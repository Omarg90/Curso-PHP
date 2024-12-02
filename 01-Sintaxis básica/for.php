<?php
$multiplo = 5;
for ($i = 1; $i <= 10; $i++){ //se puede poner i+1, i+5, i -1.....
    $resultado = $multiplo * $i;
    echo ("$multiplo * $i = $resultado </br>" );
}
echo "Números impares: </br>";

for ($j = 0; $j <=20; $j++){
    if($j % 2 ==0){
        continue;
    }
    echo "$j </br>";
}
//BREAK
for ($k = 0; $k <=20; $k++){
    echo "$k </br>";
    if($k % 2 == 0){
        break;
    }
}

echo "Números pares: </br>";
for ($l = 0; $l <=20; $l++){
    if($l % 2 != 0){
        continue;
    }
    echo "$l </br>";

}
?>