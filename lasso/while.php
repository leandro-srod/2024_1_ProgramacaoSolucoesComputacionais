<?php
echo "LAÇO DE REPETIÇÃO WHILE" .  "<br><br>";

$i = 1;
while ($i < 20){
   echo "<br>" . $i;
    // condicional
    if ($i < 18){
        echo " = Menor de idade <br>" ;
    }else{
        echo " = Maior de idade <br>" ;
    }
    $i++;
}


?>