<?php

// Array Associativo

$produtos = array(
    "EL1241" => "Celular Smsung M23",
    "COZ0345" => "Coocktop de indução -110V",
    "MO5423" => "Sofá 3 lugares",
    "PAN7845" => "Jogo de panelas Tramontina",
);
echo $produtos['PAN7845'] . "<br><br>";

echo "DATA COMPLETA COM ARRAY ASSOCIATIVO <br><br>";

$semana = array (
    "Sun"=> "Domingo",
    "Mon" => "Segunda-feira",
    "Tue"=> "Terça-feira",
    "Wed"=> "Quarta-feira",
    "Thu"=> "Quinta-feira",
    "Fri"=> "Sexta-feira",
    "Sat"=> "Sábado"
    );

$meses = array (
    "Jan" =>"Janeiro", 
    "Fev" => "Fevereiro",
    "Mar" => "Março",
    "Apr" => "Abril",
    "May" => "Maio",
    "Jun" => "Junho",
    "Jul" => "Julho",
    "Aug" => "Agosto",
    "Set" => "Setembro",
    "Oct" => "Outubro", 
    "Nov" => "Novembro",
    "Dec" => "Dezembro"
);

$s = date("D");
$d = date("d");
$m = date("M");
$y = date("Y");

echo "Bom dia! <br>";
echo "Hoje é " . $semana[$s] . " , " . $d . " de " . $meses[$m] . " de " . $y;
?>