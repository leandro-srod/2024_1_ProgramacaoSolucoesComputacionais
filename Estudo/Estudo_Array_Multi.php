<?php
// ARRAYS MULTIDIMENSIONAIS

$arr = array(array('Leandro', 'José', 'Tania', ' Flavio'), array(' da Silva Rodrigues', ' das Couves', 'Maria da Silva Rodrigues', ' Saviuki'));

echo $arr[0][0];
echo $arr [1][0];
// Vai printar Leandro da Silva Rodrigues

//Outra forma de declarar:

$arr[0]=array('Leandro', 'José', 'Tania', ' Flavio');
$arr[1]=array(' da Silva Rodrigues', ' das Couves', 'Maria da Silva Rodrigues', ' Saviuki');



?>