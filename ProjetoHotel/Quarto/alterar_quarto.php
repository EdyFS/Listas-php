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
        $numero = $_POST['numero'];
        $tipo = $_POST['tipo'];
        $preco = $_POST['preco'];
        if ($numero != "" && $tipo != "" && $preco != ""){
            if (alterarQuarto($numero,$tipo,$preco, $_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarQuartoId($id);
?>
<h1 class="d-flex justify-content-center">Alterar dados do quarto</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="numero" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="numero" value="<?= $dados['numero_quarto'] ?>"> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="tipo" class="form-label">Insira o tipo do quarto: </label>
        <input type="text" class="form-control" name="tipo" value="<?= $dados['tipo'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="preco" class="form-label">Insira o preço: </label>
        <input type="number" class="form-control" name="preco" value="<?= $dados['preco_por_noite'] ?>">
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