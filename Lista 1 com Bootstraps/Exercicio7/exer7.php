<?php
require_once "cabecalho.php";
?>

<form action="exer7resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor1" class="form-label">Informe a medida em metros</label>
            <input type="number" name="valor1" id="valor1" class="form-control">
        </div>
    </div>
    
        <div class="row">
            <div class="col">
        <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </div>
    
</form>