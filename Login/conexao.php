<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

// CONEXÃO BANCO DE DADOS

$mysqli = new mysqli($host, $usuario, $senha, $database);

// VERIFICAÇÃO ERRO

if ($mysqli->connect_errno){
    die("Falha ao conectar ao banco de dados: ". (" $mysqli->errno ") . $mysqli->connect_error);

}

?>