<?php

class Carro{
    public $id;
    public $ano;
    public $marca;
    public $modelo;
    public $cor;
    public $cambio;


    public function __construct($id, $ano, $marca, $modelo, $cor, $cambio){
        $this->id = $id;
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->cambio = $cambio;
        }

// Métodos
public function status(){
    echo "<h2> Dados do Veículo ". $this->id . "</h2>";
    echo "<p>Ano: ". $this->ano . "</p>";
    echo "<p>Marca: ". $this->marca . "</p>";
    echo "<p>Modelo: ". $this->modelo . "</p>";
    echo "<p>Cor: ". $this->cor . "</p>";
    echo "<p>Câmbio: ". $this->cambio . "</p>" . "<hr>";

}

public function vender($valor){
    echo $this->marca . " " . $this->modelo . " " . $this->ano . " vendido por " . $valor;
}

public function contar($carros){
    return count($carros);
}

}