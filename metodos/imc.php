<?php

//Receber as variáveis pelo post
$peso = $_POST['peso'];
$altura = $_POST['altura'];

//Declarar o método

function calculoIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura); 
    echo "O seu IMC: " . $imc . "<br>";
    resultado($imc);
}

function resultado($imc){
    if($imc <16.9){
        echo "Muito abaixo do peso.";
    }elseif($imc < 18.4){
        echo "Abaixo do peso. ";
    }elseif($imc < 24.9){
        echo "Peso normal. ";
    }elseif($imc <29.9){
        echo "Acima do peso. ";
    }elseif($imc <34.9){
        echo "Obesidade Grau I. ";
    }elseif($imc <40){
        echo "Obesidade Grau II. ";
    }else{
        echo "Obesidade Grau III";
    }
}

//Chamar função

calculoIMC($peso, $altura);