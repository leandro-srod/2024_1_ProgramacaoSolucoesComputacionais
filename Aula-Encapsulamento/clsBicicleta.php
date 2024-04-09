<?php
class Bicicleta
{
    private $id, $marca, $cor;
    public function __construct($id, $marca, $cor){
        $this->id = $id;
        $this->marca = $marca;
        $this->cor = $cor;
    }

    //Metodos getter e setter
    public function getId()
    {
        return $this->id;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setCor($cor): void
    {
        $this->cor = $cor;
    }


    //Metodos
    public function andar()
    {
        echo "<br>Bicicleta andando!<br>";
    }
    public function frear()
    {
        echo "Bicicleta parada!";
    }
}