<?php

$numero = $_POST['numero'];

if ($numero > 0){
    echo "Valor positivo";
}
elseif ($numero < 0){
    echo "Valor negativo";
}
else{
    echo "Igual a zero";
}

