<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])){
$id = $GET['id'];
session_start();
$_SESSION['id'] = $id;
} else
$id = $_SESSION['id'];
if ($_POST){
    if ($nome != "" && $descricao != "" && $valor != "" && $categoria != ""){
        session_start();
        if (excluirProduto($_SESSION ['id'] ))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    } 
}
$dados = consultarProdutoId($id);
?>
<h3>Excluir Produto</h3>
<form action="excluir_produto.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="descricao" class="form-label">Informe a descição</label>
            <input type="text" class="form-control" name="descricao" value="<?= $dados['descricao'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor</label>
            <input type="text" class="form-control" name="valor" value="<?= $dados['valor'] ?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria</label>
            <select class="form-select" name="categoria">
                <?php
                $linhas = retornarCategorias();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                    if ($l['id'] == $dados["categoria_id"])
                        echo "<option selected value='{$l['id']}'>{$l['descricao']}</option>";
                    else
                        echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <input type="submit" class="btn btn-success mt-3" value="Excluir">
        </div>
    </div>
</form>
<?php

require_once("../rodape.html");