<?php

$nome = isset($_POST['nome']);
$nota = isset($_P['nota']);
$soma_nota = 0;

for ($i=0; $i< 10; $i++){
    $soma_nota = $soma_nota + $nota;
}

$media = $soma_nota / count($nome[]);
echo $media;

for ($i = 0; $i < 10; $i++){
    $maior = $nota;
    if ($nota > $maior){
        $maior = $nota;
    }
} 


?>