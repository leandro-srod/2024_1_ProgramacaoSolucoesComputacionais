<?php

// CÁLCULO DA MÉDIA

//Deve especificar na URL os valores de a1, a2, a3, a4
$nota1 = $_GET["a1"];
$nota2 = $_GET["a2"];
$nota3 = $_GET["a3"];
$nota4 = $_GET["a4"];

//Declaração do Método
function media($a1, $a2, $a3, $a4){
    $media = ($a1 + $a2 + $a3 + $a4)/4;
    echo "Média final: $media";
}

function media2($a1, $a2, $a3, $a4){
    $notas = array("$a1","$a2","$a3","$a4");
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
    echo "<br><br>Média final 2: $media";

}

//Chamada do Método
media ($nota1, $nota2, $nota3, $nota4);
media2 ($nota1, $nota2, $nota3, $nota4);
?>
