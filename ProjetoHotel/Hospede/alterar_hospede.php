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
        $nome = $_POST['nome'];
        $fone = $_POST['fone'];
        $checkin = $_POST['checkin'];
        if ($nome != "" && $fone != "" && $checkin != ""){
            if (alterarHospede($nome,$fone,$checkin, $_SESSION['id'])){
                echo "Registro alterado com sucesso!";}
            else{
                echo "Erro ao alterar o registro!";}
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarHospedeId($id);
?>
<h1 class="d-flex justify-content-center">Alterar dados do hóspede</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="nome" class="form-label">Insira o nome do hóspede: </label>
        <input type="text" class="form-control" name="nome" value="<?= $dados['nome_hospede'] ?>"> 
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="fone" class="form-label">Insira o telefone do hóspede: </label>
        <input type="text" class="form-control" name="fone" value="<?= $dados['telefone'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="checkin" class="form-label">Insira a data de Check In do hóspede: </label>
        <input type="date" class="form-control" name="checkin" value="<?= $dados['data_checkin'] ?>">
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