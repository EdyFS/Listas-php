<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$idade = 2024 - $ano;
echo "A idade é $idade anos<br>";

$dia_mes = $mes * 30;
$dia_ano = $ano * 365;
$dias_vividos = $dia + $dia_mes + $dia_ano;
echo "Dias vividos: $dias_vividos<br>";

$idade_2025 = 2025 - $ano;
echo "Idade em 2025: $idade_2025<br>";
