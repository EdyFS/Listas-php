<?php

$n1 = $_Post['n1'];
$n2 = $_Post['n2'];
$n3 = $_Post['n3'];
$n4 = $_Post['n4'];
$faltas = $_POST['faltas'];
$media = ($n1 + $n2 + $n3 + $n4) / 4;
//Se a nota for abaixo de 6 e qtd de faltas > 10 = reprovado
//Senão = aprovado
if(($media >=6 ) && ($faltas < 10)){
    echo "Aprovado!";
} else{
    echo "Reprovado!";
}

$vetor = array(10, 20, 30);
echo $vetor[1];
$vetor[3] = 40;
echo "<br/>".$vetor[3];
$vetor["tio"] = "tio";
echo "valores de vetor: <br/>";
foreach($vetor as $p => $v){
    echo "Posição $p = $v <br/>";
}
print_r($vetor);
var_dump($vetor);