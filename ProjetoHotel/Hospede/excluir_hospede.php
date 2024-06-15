<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])){
    $id = $GET['id'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        if ($nome != "" && $fone != "" && $checkin != ""){
            session_start();
            if (excluirHospede($_SESSION ['id'] ))
                header('Location: index.php');
            else
                echo "Erro ao excluir o registro!";
        } 
    }
$dados = consultarHospedeId($id);
?>
<h1 class="d-flex justify-content-center">Excluir hóspede</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="nome" class="form-label">Insira o nome do hóspede: </label>
        <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="fone" class="form-label">Insira o telefone do hóspede: </label>
        <input type="text" class="form-control" name="fone" value="<?= $dados['fone'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="checkin" class="form-label">Insira a data de Check In do hóspede: </label>
        <input type="date" class="form-control" name="checkin" value="<?= $dados['checkin'] ?>" disabled>
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