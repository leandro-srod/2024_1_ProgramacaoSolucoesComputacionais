<?php

    $x = 5;
    $y = 5.0;
    print("a soma é: ");
    echo( $x + $y );

    if( $x == $y ) {
        echo("<br>Os valores das variaveis são iguais");
    }else{
        echo("<br>Os valores das variaveis são diferentes!");
    }

    if( $x === $y ) {
        echo("<br>As variaveis são idênticas!");
    }else{
        echo("<br>As variáveis não são idênticas!");
    }

    switch( $x ){
        case $y:
            echo("<br> $x é igual a $y");
            break;
        case 1:
            echo("<br> Valor é 1");
        default:
            echo("<br>Valor default");
    }

echo("<hr>");

$soma = 0;
for( $i = 1; $i <= 100 ; $i++){
    if( $i % 2 == 0){
        $soma += $i;
    }
}
echo(" <br> soma dos numeros pares de 1 a 100 é: $soma");
echo ("<hr>");

$fatorial = 1;
for( $i = 2; $i <= 5 ; $i++){
    $fatorial = $fatorial * $i;
}
echo("<br> o fatorial de 5 é: $fatorial");