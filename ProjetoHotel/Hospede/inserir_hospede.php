<?php
require_once("../cabecalho.php");
?>
<h1 class="d-flex justify-content-center">Inserir novo hóspede</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="nome" class="form-label">Insira o nome do hóspede: </label>
        <input type="text" class="form-control" name="nome">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="fone" class="form-label">Insira o telefone do hóspede: </label>
        <input type="text" class="form-control" name="fone">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="checkin" class="form-label">Insira a data de Check In do hóspede: </label>
        <input type="date" class="form-control" name="checkin">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Inserir</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");