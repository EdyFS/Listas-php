<?php

$numeros = $_POST['numeros'];
$primos = [];

foreach($numeros as $numero) {
    if ($numero <= 1) {
        continue;
    }

    $primo = true;
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i === 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        $primos[] = $numero;
    }
}

foreach ($primos as $primo) {
    echo "<li>$primo</li>";
}
?>