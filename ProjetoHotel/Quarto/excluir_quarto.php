<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        if ($numero != "" && $tipo != "" && $preco != ""){
            session_start();
            if (excluirQuarto($_SESSION ['id'] ))
                header('Location: index.php');
            else
                echo "Erro ao excluir o registro!";
        } 
    }
$dados = consultarQuartoId($id);
?>
<h1 class="d-flex justify-content-center">Excluir quarto</h1>
<form action="excluir_quarto.php" method="POST">
    <div class="row">
        <div class="col">
        <label for="numero" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="numero" value="<?= $dados['numero'] ?>" disabled>
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
        <input type="number" class="form-control" name="preco" value="<?= $dados['preco'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Excluir</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");