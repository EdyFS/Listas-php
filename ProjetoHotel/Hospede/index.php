<?php
require_once("../cabecalho.php");
?>
<h1>Hóspede</h1>
<a href="inserir_hospede.php" class="btn btn-primary mt-3">Inserir Hóspede</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Data de Checkin</th>
            <th>Ações<th>
        </tr>
    </thead>
    <tbody>
    <?php
                $linhas = mostrarHospedes();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['id_hospede'] ?></td>
                <td><?= $l['nome_hospede'] ?></td>
                <td><?= $l['telefone'] ?></td>
                <td><?= $l['data_checkin'] ?></td>
                <td>
        
                <a href="alterar_hospede.php?id=<?= $l['id_hospede'] ?>&nome=<?= $l['nome_hospede'] ?>&fone=<?= $l['telefone'] ?>&checkin=<?= $l['data_checkin'] ?>" class="btn btn-warning">Alterar</a>
                <a href="excluir_hospede.php?id=<?= $l['id_hospede'] ?>&nome=<?= $l['nome_hospede'] ?>&fone=<?= $l['telefone'] ?>&checkin=<?= $l['data_checkin'] ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
                }
            ?>
        
    </tbody>
</table>

<?php
require_once("../rodape.html");