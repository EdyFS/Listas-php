<?php

if(isset($_POST['submit'])){
    $produtos = $_POST['produtos'];
    $preco = $_POST['precos'];
    $menor_50 = 0;
    $entre_50_100 = array();
    $maior_100 = 0;
    $cont = 0;

    foreach ($precos as $preco) {
        if ($preco < 50) {
            $menor_50++;
        } elseif ($preco >= 50 && $preco <= 100) {
            $entre_50_100[] = $i;
        } elseif ($preco > 100) {
            $maior_100 += $preco;
            $cont++;
        }
    }
    echo "Há ", $menor_50, "produtos abaixo de R$50,00" ;
    
    echo "Produtos entre R$50,00 e R$100,00: ";
    foreach($produtos as $produto){
        foreach($entre_50_100 as $entre){
            if ($produto == $entre )
            echo $produto;
        }
        
    }
    
    if ($cont > 0) {
        $media = $maior_100 / $cont;
        echo "A média dos preços dos produtos com preço maior que R$100,00 é R$", $media;
    } else {
        echo "Não há produtos com preço superior a R$100,00.";
    }
}
?>