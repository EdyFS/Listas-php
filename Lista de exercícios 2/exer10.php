<?php

$massa = $_POST['massa'];
$altura = $_POST['altura'];

$imc = $massa / ($altura * $altura);

if ($imc < 18.5){
    echo "Baixo peso";
}
elseif($imc >= 18.5 && $imc < 24.9){
    echo "Peso normal";
}
elseif($imc >= 24.9 && $imc < 29.9){
    echo "Sobrepeso";
}
elseif($imc >= 29.9 && $imc < 34.9){
    echo "Obesidade grau I";
}
elseif($imc >= 34.9 && $imc < 39.9){
    echo "Obesidade grau II";
}
else{
    echo "Obesidade grau III";
}