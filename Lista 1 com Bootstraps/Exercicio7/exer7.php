<?php
require_once "cabecalho.php";
?>

<form action="exer7resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="medida" class="form-label">Informe a medida em metros</label>
            <input type="number" name="medida" id="medida" class="form-control">
        </div>
    </div>
    
        <div class="row">
            <div class="col">
        <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </div>
    
</form>