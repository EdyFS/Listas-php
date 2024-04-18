<?php

$numero = $_POST['numero'];


for ($i = 1; $i > $numero ; $i++){
    $fatorial = $i * ($i - 1);
}

echo $fatorial;