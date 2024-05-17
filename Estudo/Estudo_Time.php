<?php

date_default_timezone_set('America/Sao_Paulo');

//Pega a hora e minutagem atual e soma 10 minutos
$tempo = date('H:i', time()+(60*10));

echo "A promoção acaba as: $tempo";

?>