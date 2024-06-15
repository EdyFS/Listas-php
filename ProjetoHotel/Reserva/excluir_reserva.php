<?php
require_once("../cabecalho.php");
?>
<h1 class="d-flex justify-content-center">Excluir reserva</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="datareserva" class="form-label">Insira a data da reserva: </label>
        <input type="date" class="form-control" name="datareserva">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="hospede" class="form-label">Insira o código do hóspede: </label>
        <input type="text" class="form-control" name="hospede">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="quarto" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="quarto">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Excluir</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");