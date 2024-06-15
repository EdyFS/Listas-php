<?php
require_once("../cabecalho.php");
?>
<h1 class="d-flex justify-content-center">Alterar dados do quarto</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="numero" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="numero">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="tipo" class="form-label">Insira o tipo do quarto: </label>
        <input type="text" class="form-control" name="tipo">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="preco" class="form-label">Insira o preço do quarto: </label>
        <input type="number" class="form-control" name="preco">
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