<?php 

function saberPrimo(int $num) : bool{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) { 
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function sumarPrimos(int $sum, int $num) : int{
    if(saberPrimo($num)){
        return $sum + $num;
    }
    return $sum;
}

$arrayNums = array(1,3,4,7,8,9,11,12);
$resultado = array_reduce($arrayNums,'sumarPrimos',0);
print_r($resultado);

?>