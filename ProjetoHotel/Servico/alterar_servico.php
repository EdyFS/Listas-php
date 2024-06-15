<?php
require_once("../cabecalho.php");
?>
<h1 class="d-flex justify-content-center">Alterar dados do serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico" value="<?= $dados['servico'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="custo" class="form-label">Insira o custo do serviço: </label>
        <input type="text" class="form-control" name="custo" value="<?= $dados['custp'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="reserva" class="form-label">Insira o código da reserva: </label>
        <input type="number" class="form-control" name="reserva" value="<?= $dados['reserva'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Alterar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");