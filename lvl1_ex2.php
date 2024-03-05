<?php 

$X = array(10, 20, 30, 40, 50, 60);

echo count($X) . "<br>";

array_splice($X, 2, 1);

echo count($X);
?>