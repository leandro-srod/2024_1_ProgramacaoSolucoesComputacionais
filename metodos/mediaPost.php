<?php

echo "Notas enviadas.<br><br>";

// CÁLCULO DA MÉDIA

//Deve especificar na URL os valores de a1, a2, a3, a4
$nota1 = $_POST['a1'];
$nota2 = $_POST['a2'];
$nota3 = $_POST['a3'];
$nota4 = $_POST['a4'];

//Declaração do Método

function mediaPost($a1, $a2, $a3, $a4){
    $notas = array("$a1","$a2","$a3","$a4");
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
    echo "A Média final é: $media";

}
//Chamada do Método
mediaPost ($nota1, $nota2, $nota3, $nota4);
?>