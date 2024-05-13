<?php
//Exercício 1
function DeterminarPositivo($numero){
    if ($numero > 0){
        echo "Valor positivo";
    }
    elseif ($numero < 0){
        echo "Valor negativo";
    }
    else{
        echo "Igual a zero";
    }
}
//Exercício 2
function DeterminarMaior(){

}
//Exercício 3
function SomarMultiplicar($valor1, $valor2){
    if ($valor1 == $valor2){
        $valor = 3 * ($valor1 + $valor2);
        echo $valor;
    }
    else{
        $soma = $valor1 + $valor2;
        echo $soma;
    }
}
//Exercício 4
function MultiplicarTabuada($numero){
    for ($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo  $numero, "x", $i,  "=", "$resultado<br>";
    }
}
//Exercício 5
function CalcularFatorial($numero){
    $fatorial = 1;
    for ($i = 1; $i <= $numero ; $i++){
        $fatorial = $fatorial * $i;
    }
    
    echo $fatorial;
}
//Exercício 6
function OrdenarNumeros($valor1, $valor2){
    if ($valor1 > $valor2){
        echo $valor2 , ",", $valor1 ;
    }
    
    elseif ($valor1  < $valor2){
        echo $valor1 , ",", $valor2;
    }
    
    else{
        echo "Números iguais: " , $valor1 ;
    }
}
//Exercício 7
function MedirCentimetros($medida){
    $cm = $medida * 100;
    echo "O valor ", $medida, "m é equivalente à ", $cm, "cm";
}
//Exercício 8
function CalcularTinta($area){
    $lata = ceil($area / 54);
    $preco = $lata * 80;
    echo "Devem ser compradas ", $lata, "latas. O preço total é ", $preco;
}
//Exercício 9
function CalcularIdade($dia, $mes, $ano){
    $idade = 2024 - $ano;
    echo "A idade é $idade anos<br>";
    
    $dia_mes = ($mes - 1) * 30;
    $dia_ano = $idade * 365;
    $dias_vividos = $dia + $dia_mes + $dia_ano;
    echo "Dias vividos: $dias_vividos<br>";
    
    $idade_2025 = 2025 - $ano;
    echo "Idade em 2025: $idade_2025<br>";
}
//Exercício 10
function CalcularIMC($massa, $altura){
    $imc = $massa / ($altura * $altura);

    if ($imc < 18.5){
        echo "Baixo peso";
    }
    elseif($imc >= 18.5 && $imc < 24.9){
        echo "Peso normal";
    }
    elseif($imc >= 24.9 && $imc < 29.9){
        echo "Sobrepeso";
    }
    elseif($imc >= 29.9 && $imc < 34.9){
        echo "Obesidade grau I";
    }
    elseif($imc >= 34.9 && $imc < 39.9){
        echo "Obesidade grau II";
    }
    else{
        echo "Obesidade grau III";
    }
}
?>