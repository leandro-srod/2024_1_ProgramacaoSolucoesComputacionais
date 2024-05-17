<?php
include ('Exemplo.class.php');

//Instancia de objeto!
$exemplo = new Exemplo();

//Da erro porque $var1 é private, só acessa dentro da classe
//$exemplo->var1 = 'Ola';

$exemplo->var2 = 'Agora sim, pq é public e pode ser acessado fora da classe';
echo $exemplo->var2;
echo '<br / >';

// Private e Public serve para atributos e métodos

// Assim dá erro pq a variável é static
//echo $exemplo->var3;

//Para acessar, somente pela classe direto
echo Exemplo::$var3;
echo '<br / >';
Exemplo::$var3 = 'Outro conteúdo da var3';
echo Exemplo::$var3;
echo '<hr>';

Exemplo::metodoEstatico();
$exemplo->metodo();
echo '<br />';

$exemplo->setVar1('Parangaricotirrimiroaro');

?>