<?php

require_once("cabecalho.php");

require_once "conexao.php";

$db = new Conexao();
$db = $db->conectar();
?>
<h1>Sua melhor experiência no melhor conforto</h1>


<?php
require_once("rodape.html");