<?php
require_once("../cabecalho.php");
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
} else {
    $id = $_SESSION['id'];
}
if (isset($_POST['atualizar'])){
        $servico = $_POST['servico'];
        $custo = $_POST['custo'];
        $reserva = $_POST['reserva'];
        if ($servico != "" && $custo != "" && $reserva != ""){
            if (alterarServico($servico,$custo,$reserva, $_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarServicoId($id);
?>
<h1 class="d-flex justify-content-center">Alterar dados do serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico" value="<?= $dados['nome_servico'] ?>"> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="custo" class="form-label">Insira o custo do serviço: </label>
        <input type="number" class="form-control" name="custo" value="<?= $dados['custo'] ?>">
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
        <button type="submit" class="btn btn-success mt-3" value="1" name="atualizar">Alterar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");