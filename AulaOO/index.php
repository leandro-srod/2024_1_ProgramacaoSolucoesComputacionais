<?php

include ("clsCidade.php");
include_once ("clsPessoa.php");
include_once ("clsCategoria.php");
include_once ("clsProduto.php");

$c1 = new Cidade();
$c2 = new Cidade("Porto Alegre");

$p1 = new Pessoa(1, "João da Silva");
$p2 = new Pessoa(2, "Maria", 1.6 );
$p3 = new Pessoa(3, "José", 1.8 , $c1);
$p4 = new Pessoa(4,"Júlia", 1.75, $c2);
$p5 = new Pessoa(5,"Susy", 1.7, new Cidade());
$p6 = new Pessoa(6,"Carolina", 1.71, new Cidade("Cacequi"));

echo ("<br>" . $p1->nome . " - " . $p1->cidade->nome);
echo ("<br>" . $p2->nome . " - " . $p2->cidade->nome);
echo ("<br>" . $p3->nome . " - " . $p3->cidade->nome);
echo ("<br>" . $p4->nome . " - " . $p4->cidade->nome);
echo ("<br>" . $p5->nome . " - " . $p5->cidade->nome);
echo ("<br>" . $p6->nome . " - " . $p6->cidade->nome);
echo("<br><hr>");

$cat1 = new Categoria();
$cat2 = new Categoria("Bebidas");

$prod1 = new Produto(1, "Vassoura", 15, 2);
$prod2 = new Produto(2, "Balde", 5, 20 );
$prod3 = new Produto(3, "Heineken", 4.8, 12, $cat2 );
$prod4 = new Produto(4, "Eisenban", 3.9, 12, $cat2 );
$prod5 = new Produto(5, "Whisky", 120, 1, $cat2);
$prod6 = new Produto(6, "Água Mineral", 5, 1, $cat2);


echo ("<br>" . $prod1->nome . " - Preço: " . $prod1->preco. " - Quantidade: ". $prod1->qtd. " - Categoria: ". $prod1->cat->nome);
echo ("<br>" . $prod2->nome . " - Preço: " . $prod2->preco. " - Quantidade: ". $prod2->qtd. " - Categoria: ". $prod2->cat->nome);
echo ("<br>" . $prod3->nome . " - Preço: " . $prod3->preco. " - Quantidade: ". $prod3->qtd. " - Categoria: ". $prod3->cat->nome);
echo ("<br>" . $prod4->nome . " - Preço: " . $prod4->preco. " - Quantidade: ". $prod4->qtd. " - Categoria: ". $prod4->cat->nome);
echo ("<br>" . $prod5->nome . " - Preço: " . $prod5->preco. " - Quantidade: ". $prod5->qtd. " - Categoria: ". $prod5->cat->nome);
echo ("<br>" . $prod6->nome . " - Preço: " . $prod6->preco. " - Quantidade: ". $prod6->qtd. " - Categoria: ". $prod6->cat->nome);

