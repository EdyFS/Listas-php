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
            if (excluirReserva($_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    $dados = consultarReservaId($id);
?>
<h1 class="d-flex justify-content-center">Excluir dados da reserva</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="datareserva" class="form-label">Insira a data da reserva: </label>
        <input type="date" class="form-control" name="datareserva" value="<?= $dados['data_reserva'] ?>" disabled> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="hospede" class="form-label">Insira o hóspede: </label>
        <input type="number" class="form-control" name="hospede" value="<?= $dados['hospede'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="quarto" class="form-label">Insira o quarto: </label>
        <input type="number" class="form-control" name="quarto" value="<?= $dados['quarto'] ?>" disabled>
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