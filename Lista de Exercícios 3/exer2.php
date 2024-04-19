<?php
$valor = isset($_POST['valor']) ? $_POST['valor'] : array();
$posit = 0;
$negat = 0;
$par = 0;
$impar = 0;
$zero = 0;

foreach ($valor as $numero) {
    $valor = $numero['numero'];
    if ($valor > 0) {
        $posit++;
    } elseif ($valor < 0) {
        $negat++;
    } elseif ($valor == 0) {
        $zero++;
    }
    if ($valor % 2 == 0 && $valor != 0) {
        $par++;
    } elseif ($valor % 2 !=0 && $valor != 0) {
        $impar++;
    }
}

echo "Números positivos: ", $posit;
echo "Números negativos:  ", $negat;
echo "Quantidade de zeros: ",$zero;
echo "Números pares: ",$par;
echo "Números ímpares: ",$impar;
?>