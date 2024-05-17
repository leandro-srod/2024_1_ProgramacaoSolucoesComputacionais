<?php

// ESTUDO OPERADORES LÓGICOS E (&&) OU (||)

$var = 2;
$var2 = 3;
$var3 = 4;

//Operador lógico E, definido como &&
if (($var == $var2) && ($var2 == $var3)){
    echo 'As variáveis são iguais';
}else{
    echo 'As variáveis são diferentes';
}

//Operador lógico OU, definido como ||

$var3 = 3;

if (($var == $var2) || ($var2 == $var3)){
    echo "<br> Segunda condição verdadeira";
}

?>