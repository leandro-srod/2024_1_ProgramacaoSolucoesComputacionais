<?php

class Veiculo{
    //Atributos
    public $id, $marca, $modelo, $velocidade;
    
    //Metodo Construtor
    public function __construct($marca, $model){
        $this->id = NULL;    
        $this->marca = $marca;
        $this->modelo = $model;
        $this->velocidade = 0;
    }
    //Metodos
    public function ligar(){
        echo "Veículo ligado!";
        echo "<br>Modelo: ". $this->modelo;
    }
    public function acelerar($vel){
        if ($vel >0){
            $this->velocidade += $vel;
            //ou $this->velocidade = $this->velocidade + $vel;
            return $this->velocidade;
        }
    }

    public function frear($vel){
    if ($vel > 0){
        if ($vel <= $this->velocidade){
            $this->velocidade -= $vel;
            }else{
                $this->velocidade =0;
            }
        }
       return $this->velocidade;
    }
}  



