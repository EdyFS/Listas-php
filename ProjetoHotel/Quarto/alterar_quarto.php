<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])){
    $id = $GET['id_quarto'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        $numero = $_POST['numero'];
        $tipo = $_POST['tipo'];
        $preco = $_POST['preco'];
        if ($numero != "" && $tipo != "" && $preco != ""){
            session_start();
            if (alterarQuarto($numero,$tipo,$preco, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
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
        <input type="number" class="form-control" name="numero" value="<?= $numero ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="tipo" class="form-label">Insira o tipo do quarto: </label>
        <input type="text" class="form-control" name="tipo" value="<?= $tipo ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="preco" class="form-label">Insira o preço do quarto: </label>
        <input type="number" class="form-control" name="preco" value="<?= $preco ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-success mt-3">Alterar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");