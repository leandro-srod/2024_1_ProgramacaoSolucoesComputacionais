<?php

class Exemplo{
    private $var1;
    public $var2;

    public static $var3 = 'estático';

    public function metodo(){
        echo '<br / >';
        echo 'Método público';
    }

    public static function metodoEstatico(){
        echo '<br / >';
        echo 'Método Estático';
    }

    public function setVar1($conteudo){
        $this->var1 = $conteudo;
        echo $conteudo;
    }
}


?>