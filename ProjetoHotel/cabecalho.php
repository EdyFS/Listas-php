<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Lista-php/Listas-php/ProjetoHotel/index.php">Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="/Lista-php/Listas-php/ProjetoHotel/Hospede/index.php">Hóspede</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Lista-php/Listas-php/ProjetoHotel/Quarto/index.php">Quartos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Lista-php/Listas-php/ProjetoHotel/Reserva/index.php">Reservas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Lista-php/Listas-php/ProjetoHotel/Servico/index.php">Serviços</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container">
    <?php
require_once("funcoes.php");
if(conectar()){
  echo "Conexão realizada com sucesso!";
}
