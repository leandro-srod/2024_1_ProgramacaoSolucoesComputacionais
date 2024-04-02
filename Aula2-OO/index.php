<?php

require_once("carro.php");

$carro = new Carro("01", 2019, "Fiat", "Cronos", "Vermelho");
$carro->status();
$carro->vender("R$66.900,00");


$carro1 = new Carro("02", 2023, "Renault", "Sandero", "Prata");
$carro1->status();
$carro1->vender("R$50.000,00");

$carro2 = new Carro("03", 2014, "Honda", "Fit", "Preto");
$carro2->status();
