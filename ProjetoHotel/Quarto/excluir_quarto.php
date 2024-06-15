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
            if (excluirQuarto($_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    $dados = consultarQuartoId($id);
?>
<h1 class="d-flex justify-content-center">Excluir dados do hóspede</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="numero" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="numero" value="<?= $dados['numero_quarto'] ?>" disabled> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="tipo" class="form-label">Insira o tipo do quarto: </label>
        <input type="text" class="form-control" name="tipo" value="<?= $dados['tipo'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="preco" class="form-label">Insira o preço do quarto: </label>
        <input type="number" class="form-control" name="preco" value="<?= $dados['preco_por_noite'] ?>" disabled>
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