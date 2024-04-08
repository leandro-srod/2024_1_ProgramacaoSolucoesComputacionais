<?php

include_once("clsCarro.php");
include_once("clsMoto.php");
include_once("clsVeiculo.php");

//Superclasse
$v1 = new Veiculo("Fiat","Doblo");
$v1 ->ligar();
echo "<hr>";

//Subclasses
$car1 = new Carro("Jeep","Renegade",4);
$car1->ligar();
echo "<hr>";

$mot1 = new Moto("Honda","Twister",250,true);
$mot1->ligar();
echo "<br>Modelo Moto: " . $mot1->marca;

echo "<hr>";

echo "Velocidade do Veículo: " . $v1->velocidade. "<br>";
$v1->acelerar(100);
echo "Velocidade do Veículo" . $v1->velocidade;

echo "<hr>";

echo "Velocidade do Carro: " . $car1->acelerar(50) . "<hr>";
echo "Velocidade do Carro: " . $car1->frear(10) . "<hr>";
echo "Velocidade do Carro: " . $car1->frear(50) . "<hr>";

