<?php
require_once("../cabecalho.php");
?>
<h1 class="d-flex justify-content-center">Inserir novo serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="custo" class="form-label">Insira o custo do serviço: </label>
        <input type="text" class="form-control" name="custo">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="reserva" class="form-label">Insira o código da reserva: </label>
        <input type="number" class="form-control" name="reserva">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Inserir</button>
        </div>
    </div>
</form>

<?php
if ($_POST){
    $servico = $_POST['nome_servico'];
    $custo = $_POST['custo'];
    $reserva = $_POST['reserva'];
    if ($servico != "" && $custo != "" && $reserva != ""){
        if (inserirServico($servico,$custo,$reserva))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
require_once("../rodape.html");