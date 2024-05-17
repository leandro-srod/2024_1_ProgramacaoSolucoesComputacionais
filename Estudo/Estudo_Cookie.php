<?php
$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req){
    Case 1:
        Criar();
        break;
    Case 2:
        Ler();
        break;
    Case 3:
        Alterar();
        break;
    Case 4:
        Deletar();
        break;
}

function Criar(){
    echo "Criar";
    setcookie("nome", "Leandro", time() + 100);
}

function Ler(){
    //echo $_COOKIE["nome"];
    echo "Função Ler" . "<br />";
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}

function Alterar(){
    echo "Alterar";
    setcookie("nome", "Angélica");
}

function Deletar(){
    echo "Deletar";
    setcookie("nome", "Leandro", time() -1);
}



?>