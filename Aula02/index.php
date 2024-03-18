<?php

print ("ARRAY CARROS" . "<br><br>");
    $carros = array ("Doblo", "Opala", "Renegade");
    foreach ($carros as $lista) {
      print ($lista . "<br>");
   }
   echo "<br> Meu carro: $carros[0] <hr>";
   var_dump($carros);
?>