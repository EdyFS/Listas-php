<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];
$n6 = $_POST["n6"];
$n7 = $_POST["n7"];

$menor = $n1;
for ($i = $n1; $i < 7; $i++){
    if ($menor < $i){
        $menor = $i;
    }
    echo $menor;

}