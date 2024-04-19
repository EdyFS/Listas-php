<?php


    $numero = $_POST["numero"];
    $valores = $_POST["valor"];
    
    foreach($valores as $n) {
        $multiplicacao = $n * $numero;
        echo "O resultado da multiplicação entre ", $n,"e ", $numero, "é ", $multiplicacao;
    }

?>