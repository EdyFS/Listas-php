<?php

require_once("../cabecalho.html");

?>
<h1>Gerenciamento de Produtos</h1>

<a href="" class="btn btn-primary mt-3">Adicionar Produto</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Persuasão</td>
            <td>Livro de Jane Austen</td>
            <td>R$10,00</td>
            <td>Livros</td>
        </tr>
        <tr>
            <td>Espagueti Liane</td>
            <td>Macarrão de Semolina</td>
            <td>R$3,00</td>
            <td>Perecíveis</td>
        </tr>
        <tr>
            <td>óculos de Natação</td>
            <td>Infantil</td>
            <td>R$25,00</td>
            <td>Material Esportivo</td>
        </tr>
    </tbody>
</table>

<?php
require_once("../rodape.html");
