<?php 

function buscarLetra(array $words, string $char) : void{

    $coincidencia = true;

    foreach ($words as $word) {
        if(strpos($word, $char) === false){
            $coincidencia = false;
        }
    }
    if($coincidencia){
        echo "La letra '" . $char . "' se encuentra en todas las palabras.";
    } else {
        echo "La letra '" . $char . "' NO se encuentra en todas las palabras.";
    }
}

$words = array("casa","playa","lago");
$char = "a";

buscarLetra($words,$char);
?>