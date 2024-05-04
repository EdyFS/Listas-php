<?php

$numero = $_POST['numero'];

$fatorial = 1;
for ($i = 1; $i <= $numero ; $i++){
    $fatorial = $fatorial * $i;
}

echo $fatorial;