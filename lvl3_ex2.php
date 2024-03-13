<?php 

function encontrarPares(string $texto) : string{
    return strlen($texto) % 2 == 0;
}
$arrayStrings = array("arbol", "bosque", "arbusto", "flor");
$resultado = array_filter($arrayStrings,'encontrarPares');
print_r($resultado);

?>