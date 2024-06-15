<?php
require_once("../cabecalho.php");
?>
<h1>Quartos</h1>
<a href="inserir_quarto.php" class="btn btn-primary mt-3">Adicionar Quarto</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Número do Quarto</th>
            <th>Tipo</th>
            <th>Preço por noite</th>
        </tr>
    </thead>
    <tbody>
    <?php
                $linhas = mostrarQuartos();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['id_quarto'] ?></td>
                <td><?= $l['numero_quarto'] ?></td>
                <td><?= $l['tipo'] ?></td>
                <td><?= $l['preco_por_noite'] ?></td>
                <td>
        
                <a href="alterar_quarto.php" class="btn btn-warning">Alterar</a>
                <a href="excluir_quarto.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
                }
            ?>
        
    </tbody>
</table>

<?php
require_once("../rodape.html");