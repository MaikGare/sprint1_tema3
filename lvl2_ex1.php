<?php 

$array1 = array(1, 3, 5, 7, 9, 11);
$array2 = array(1, 2, 3, 4, 5, 6, 7, 8);

print_r(array_intersect($array1, $array2));
echo "<br>";

$arrayfusion = array_merge($array1,$array2);

print_r($arrayfusion);
?>