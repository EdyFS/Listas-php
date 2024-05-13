<?php
require_once "cabecalho.php";
?>

<form action="exer4resp.php" method="post">
<div class="row">
        <div class="col">
            <label for="numero" class="form-label">Informe o número</label>
            <input type="number" name="numero" id="numero" class="form-control">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>