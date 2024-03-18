<?php
echo "OPERADOR TERNÁRIO<br><br>";
$i = 1;
$qtde = 22;

do{
    echo "<br> $i";
  //      if($i < 18){
    //        echo " = Menor de idade";
      //   }else{
        //    echo " = Maior de idade";            
        // } ao Inves, faz...

        $res = ($i < 18) ? " = Menor de Idade" : " = Maior de Idade";
        echo $res;

    $i++;

    }while($i < 22);

?>