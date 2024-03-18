<?php
$paises = array("Brasil", "Argentina", "Uruguai", "Paraguai", "Peru", 
"Chile", "Bolivia", "Equador", "Colômbia", "Venezuela");

$size = count($paises); //conta quantos paises tem

echo "EXERCÍCIO FOR" . "<br><br>";

// imprimir array na tela
echo "Os países cadastrados no Array são:" . "<br><br>";

for ($i = 0; $i < $size; $i++){
    echo $paises[$i] . "<br>";
    }
?>