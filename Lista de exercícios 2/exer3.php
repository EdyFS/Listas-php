<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($n1 == $n2){
    $valor = 3 * ($n1 + $n2);
    echo $valor;
}
else{
    $soma = $n1 + $n2;
    echo $soma;
}