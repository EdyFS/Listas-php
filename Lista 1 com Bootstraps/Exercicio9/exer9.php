<?php
require_once "cabecalho.php";
?>

<form action="exer9resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="dia" class="form-label">Informe o dia de nascimento</label>
            <input type="number" name="dia" id="dia" class="form-control">
        </div>
    
        <div class="col">
            <label for="mes" class="form-label">Informe o mês do nascimento</label>
            <input type="number" name="mes" id="mes" class="form-control">
        </div>
        <div class="col">
            <label for="ano" class="form-label">Informe o ano de nascimento</label>
            <input type="number" name="ano" id="ano" class="form-control">
        </div>
    </div>
        <div class="row">
            <div class="col">
        <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </div>
    
</form>