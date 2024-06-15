<?php
require_once("../cabecalho.php");
session_start();
if (isset($_GET['id'])){
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
    } else
    $id = $_SESSION['id'];
    if ($_POST){
        $reserva = $_POST['data_reserva'];
        $hospede = $_POST['hospede'];
        $quarto = $_POST['quarto'];
        if ($reserva != "" && $hospede != "" && $quarto != ""){
            session_start();
            if (alterarQuarto($reserva,$hospede,$quarto, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarQuartoId($id);
?>
<h1 class="d-flex justify-content-center">Alterar dados da reserva</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col">
        <label for="datareserva" class="form-label">Insira a data da reserva: </label>
        <input type="date" class="form-control" name="datareserva" value="<?= $datareserva ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="hospede" class="form-label">Insira o código do hóspede: </label>
        <input type="text" class="form-control" name="hospede" value="<?= $hospede ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="quarto" class="form-label">Insira o número do quarto: </label>
        <input type="number" class="form-control" name="quarto" value="<?= $quarto ?>">
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