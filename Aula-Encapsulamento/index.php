<?php

include_once("clsBicicleta.php");
include_once("clsMountainBike.php");
include_once("clsBicicletaEletrica.php");

//$bicicleta1 = new Bicicleta();
//$bicicleta1->setId ("MinhaBike-001");
//$bicicleta1->setMarca("Caloi");
//$bicicleta1->setCor ("Azul");

$bicicleta1 = new Bicicleta("MinhaBike001", "Caloi", "Azul");
echo $bicicleta1->getId() . " - MARCA =  ". $bicicleta1->getMarca() . " / "." COR =  ". $bicicleta1->getCor();
$bicicleta1->andar();

$mountainbike1 = new MountainBike("Mountain001", "Sundown", "Preta", 1);
echo "<hr>".$mountainbike1->getId() . " - MARCA =  ". $mountainbike1->getMarca() . " / "." COR =  ". $mountainbike1->getCor(). " / Andando na marcha ". $mountainbike1->getMarcha();
$mountainbike1->andar();
$mountainbike1->mudarMarcha(3);
$mountainbike1->frear();

$eletrica1 = new BicicletaEletrica("Eletrica001", "Honda", "Vermelha", false, "20%");
echo "<hr>Usando a bicicleta elétrica";
$eletrica1 ->ligar();
$eletrica1->andar();
$eletrica1->frear();
$eletrica1->carregar("50%");
$eletrica1->andar();