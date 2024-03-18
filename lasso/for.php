<?php
echo "Laço de repetição FOR <br><br>";
$frutas = array("Maçã", "Banana", "Morango", "Uva", "Abacaxi", "Pera", "Mamão", "Melão", "Melancia", "Jaca", "Fruta do Conde", "Jaboticaba", "Caju", "Cupuaçu", "Açai", "Bergamota", "Laranja");

$size = count($frutas); //conta quantas frutas tem

// imprimir array na tela

for ($i = 0; $i < $size; $i++){
    echo $frutas[$i] . "<br>";
    }
?>