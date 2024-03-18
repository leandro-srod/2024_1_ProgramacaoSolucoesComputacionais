<?php

$cidades = array("Porto Alegre", "São Luis", "Lima", "Santiago", 
"Rio de Janeiro", "São Paulo", "Bogotá", "Londres");

echo "EXERCÍCIO FOREACH" . "<br><br>";

// imprimir array na tela
echo "As cidades cadastrados no Array são:" . "<br><br>";

foreach ($cidades as $lista){
echo $lista . "<br>";
}

?>