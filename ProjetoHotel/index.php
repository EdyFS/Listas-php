<?php

require_once("cabecalho.php");

require_once "conexao.php";

$db = new Conexao();
$db = $db->conectar();
?>

<h1 class="d-flex justify-content-center">Sua experiência no melhor conforto</h1>


<?php
require_once("rodape.html");