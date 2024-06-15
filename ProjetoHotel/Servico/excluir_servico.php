<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])){
    $id = $GET['id'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        if ($servico != "" && $custo != "" && $reserva != ""){
            session_start();
            if (excluirServico($_SESSION ['id'] ))
                header('Location: index.php');
            else
                echo "Erro ao excluir o registro!";
        } 
    }
$dados = consultarServicoId($id);
?>
<h1 class="d-flex justify-content-center">Excluir serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico" value="<?= $dados['servico'] ?>" disabled>
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
        <label for="reserva" class="form-label">Insira o código da reserva: </label>
        <input type="number" class="form-control" name="reserva" value="<?= $dados['reserva'] ?>" disabled>
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