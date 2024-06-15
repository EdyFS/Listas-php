<?php
require_once("../cabecalho.php");
?>
<h1>Reserva</h1>
<a href="inserir_reserva.php" class="btn btn-primary mt-3">Adicionar Produto</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Data da Reserva</th>
            <th>Id do Hóspede</th>
            <th>Id do Quarto</th>
        </tr>
    </thead>
    <tbody>
    <?php
                $linhas = mostrarReservas();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['id'] ?></td>
                <td><?= $l['datareserva'] ?></td>
                <td><?= $l['hospede'] ?></td>
                <td><?= $l['quarto'] ?></td>
                <td>
        
                <a href="alterar_reserva.php" class="btn btn-warning">Alterar</a>
                <a href="excluir_reserva.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
                }
            ?>
        
    </tbody>
</table>

<?php
require_once("../rodape.html");