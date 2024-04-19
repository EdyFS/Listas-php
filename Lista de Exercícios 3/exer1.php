<?php

$nome = isset($_POST['nome']); array($nomes);
$nota = isset($_P['nota']); array($notas);
$soma_nota = 0;

for ($i=0; $i< 10; $i++){
    $soma_nota = $soma_nota + $nota;
}

$media = $soma_nota / count($nomes[]);
echo $media;
$maior = 0;
for ($i = 0; $i < 10; $i++){
    if ($nota > $maior){
        $maior = $nota;
    }
} 

$indice = array_search("$maior", $notas);

echo "O aluno com maior nota é ", $nomes[$indice];


?>