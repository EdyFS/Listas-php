<?php
require_once("../cabecalho.php");
?>
<h1>Serviços</h1>
<a href="inserir_servico.php" class="btn btn-primary mt-3">Adicionar Produto</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome do Serviço</th>
            <th>Custo</th>
            <th>Número da Reserva</th>
        </tr>
    </thead>
    <tbody>
    <?php
                $linhas = retornarProdutos();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['descricao'] ?></td>
                <td><?= $l['valor'] ?></td>
                <td><?= $l['categoria'] ?></td>
                <td>
        
                <a href="alterar_servico.php" class="btn btn-warning">Alterar</a>
                <a href="excluir_servico.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
                }
            ?>
        
    </tbody>
</table>

<?php
require_once("../rodape.html");