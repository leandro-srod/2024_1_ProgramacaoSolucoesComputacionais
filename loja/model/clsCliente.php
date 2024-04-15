<?php
include_once ("clsCidade.php");

class Cliente{
    public $id;
    public $nome;
    public $nascimento;
    public $salario;
    public $cidade;
    public function __construct($id_cliente=NULL, $nome_cliente=NULL, $nasc_cliente=NULL, 
                                $sal_cliente=1412.00, $cidade_cliente=new Cidade(0, "Outra")){
        $this->id=$id_cliente;
        $this->nome=$nome_cliente;
        $this->nascimento=$nasc_cliente;
        $this->salario=$sal_cliente;
      //  $this->cidade=
    }
}