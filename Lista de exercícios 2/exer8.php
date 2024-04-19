<?php

$area = $_POST['area'];

$lata = $area / 54;
$preco = $lata * 80;
echo "Devem ser compradas ", $lata, "latas. O preço total é ", $preco;