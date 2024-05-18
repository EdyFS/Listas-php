<?php 

function conectarBanco(){
    $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root","");
    return $conexao;
    
}