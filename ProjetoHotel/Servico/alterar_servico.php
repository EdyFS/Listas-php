<?php
require_once("../cabecalho.php");
require_once("../cabecalho.php");
session_start();
if (isset($_GET['id'])){
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        $servico = $_POST['nome_servico'];
        $custo = $_POST['custo'];
        $reserva = $_POST['reserva'];
        if ($numero != "" && $tipo != "" && $preco != ""){
            session_start();
            if (alterarQuarto($nome_servico,$custo,$reserva, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarQuartoId($id);
?>
<h1 class="d-flex justify-content-center">Alterar dados do serviço</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="servico" class="form-label">Insira o nome do serviço: </label>
        <input type="text" class="form-control" name="servico" value="<?= $servico ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="custo" class="form-label">Insira o custo do serviço: </label>
        <input type="text" class="form-control" name="custo" value="<?= $custo ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="reserva" class="form-label">Insira o código da reserva: </label>
        <input type="number" class="form-control" name="reserva" value="<?= $reserva ?>">
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