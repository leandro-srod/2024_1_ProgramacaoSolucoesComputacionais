<?php
date_default_timezone_set("America/Sao_Paulo");

// Array do dia da semana

$semana = array ("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");
$meses = array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$dia_da_semana = date ("w");
$dia = date ("d");
$mes = date ("n");
$ano = date ("Y");

echo "Bom dia! <br><br> Hoje é " . $semana [$dia_da_semana] . " , " . $dia . " de " . $meses[$mes-1] . " de " . $ano . "." ;

echo "<br><br><hr>";

echo "<br>DATA EM INGLÊS: <br><br>";
echo "Good morning! Today is " . date("D") . ", " . date ("d") .  " of " . date ("m") . " of " . date("Y") . " . ";

?>