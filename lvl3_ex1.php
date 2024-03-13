<?php 

function calcularCubo(int $num) : int {
    return $num ** 3;
}

$arrayNums = array(2,3,4,5,6);
$resultado = array_map('calcularCubo',$arrayNums);
print_r($resultado);
?>