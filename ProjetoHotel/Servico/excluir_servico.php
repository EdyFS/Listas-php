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
            if (excluirServico($_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    $dados = consultarServicoId($id);
?>
<h1 class="d-flex justify-content-center">Excluir dados do serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico" value="<?= $dados['nome_servico'] ?>" disabled> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="custo" class="form-label">Insira o custo do serviço: </label>
        <input type="text" class="form-control" name="custo" value="<?= $dados['custo'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="reserva" class="form-label">Insira a reserva: </label>
        <input type="date" class="form-control" name="reserva" value="<?= $dados['reserva'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <input type="submit" class="btn btn-danger mt-3" name="atualizar" value="Excluir">
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");