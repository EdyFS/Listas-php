<?php
require_once "cabecalho.php";
?>

<form action="exer9resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor1" class="form-label">Informe o dia de nascimento</label>
            <input type="number" name="valor1" id="valor1" class="form-control">
        </div>
    
        <div class="col">
            <label for="valor2" class="form-label">Informe o mês do nascimento</label>
            <input type="number" name="valor2" id="valor2" class="form-control">
        </div>
        <div class="col">
            <label for="valor2" class="form-label">Informe o ano de nascimento</label>
            <input type="number" name="valor2" id="valor2" class="form-control">
        </div>
    </div>
        <div class="row">
            <div class="col">
        <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </div>
    
</form>