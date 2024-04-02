<?php

require_once("carro.php");
require_once("listagem.php");

// echo count($carros);
// $total2 = sizeof($carros);

echo "<h3> TOTAL DE VEÍCULOS: " . count($carros) . "</h3><hr>";

foreach($carros as $lista){
    $lista->status();
}

//$total = $lista->contar($carros);
//echo "<h3> TOTAL DE VEÍCULOS: " . $total . "</h3><hr>";