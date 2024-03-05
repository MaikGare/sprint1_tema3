<?php 

$words = array("casa","playa","lago");
$char = "a";
$coincidencia = true;

foreach ($words as $word) {
    if(strpos($word, $char) === false){
        $coincidencia = false;
    }
}
if($coincidencia){
    echo "true";
} else {
    echo "false";
}
?>