<?php 

$notas = array("Pablo" => [5, 6, 7, 8, 10],
                "Pedro" => [4, 8, 6, 5, 5],
                "Alberto" => [2, 3, 5, 7, 5],
                "Yolanda" => [9, 9, 6, 4, 0]);

function calcularMedias(array $notas) : void{
    $mediaClase = 0;

    foreach ($notas as $nota) {
        $totalNotas = count($notas);
        $sumaNotas = array_sum($notas);
        $mediaAlumno = $sumaNotas / $totalNotas;
        echo $mediaAlumno . " ";
        $mediaClase += $mediaAlumno;
    }
    echo "<br>" . $mediaClase;
}

calcularMedias($notas);
?>