<?php
// Métodos / FUNÇÕES

//Método que recebe parâmetro e tem retorno
function somar ($x , $y){
    return $x + $y;
    }
//echo "Resultado 1 = " . somar(5, 10) . "<hr>";
if(isset ( $_GET["x"])){
$v1 = $_GET["x"];
}else{
    $v1 = 0;
}

if(isset ( $_GET["y"]))
    $v1 = $_GET["y"];
    else
        $v2 = 0;
    
$v2 = $_GET["y"];
echo "Resultado 1 = " . somar($v1, $v2) . "<hr>";

//ou
$result = somar(5.3,20);
echo "Resultado 2 = " . $result . "<hr>";

//Método que NÃO recebe parâmetro e NÃO tem retorno
function imprimirmeunome (){
    echo "LEANDRO DA SILVA RODRIGUES <hr>";
    }
imprimirmeunome();

//Método que NÃO recebe parâmetro e tem retorno
function getPI (){
        return 3.14;
        }
echo "Valor do PI: " .getPI() . "<hr>";

//Método que recebe parâmetro e NÃO tem retorno
function imprimirAreaCirculo($raio){
    $area = getPI() * $raio * $raio;
    echo "Área do círculo com tamanho de raio $raio é: " . $area . "<hr>";
    }
isset ($_GET["r"]) ? $raio = $_GET["r"] : $raio = 0;

imprimirAreaCirculo($raio);
//imprimirAreaCirculo(10);
