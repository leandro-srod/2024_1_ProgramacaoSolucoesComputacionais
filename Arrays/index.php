<?php
// Trabalhando com Arrays

$numeros = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$semana = array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
echo $semana[0];
echo "<br>";

// Funções embutidas
echo count($semana);
echo "<br>";
echo count($numeros);
echo "<br>";
echo sizeof($semana);
echo "<br>";

// Data
date_default_timezone_set("America/Sao_Paulo");
$hoje = date("d/m/Y - h: i:s a");
echo "Hoje é $hoje <br>";
$hoje = date("d/m/Y - H: i:s a");
echo "Hoje é $hoje <br>";
?>