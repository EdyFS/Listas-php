<?php

$numero = $_POST['numero'];


for ($i = 1; $i <= $numero ; $i++){
    $fatorial = $fatorial * $i;
}

echo $fatorial;