<?php 
include_once('conexao.php');
?>
<html lang="en">
<?php
include_once('partials/header.php');
?>
<div class="container">
    <a href="index_venda.php" class="btn btn-primary mb-4 mb-4">Adicionar venda</a>
    <h1>lista de venda</h1>
    <table class="table">
        <tr>
            <th scope="col">id</th>
            <th scope="col">valor</th>
            <th scope="col">forma_pagamento</th>
            <th scope="col">clientes cpf</th>
            <th scope="cold">funcionarios função</th>
        </tr>
        <?php
        // query libera qualquer query
        $select = $conexao->query('SELECT id,valor,forma_pagamento,fk_clientes_cpf,fk_funcionarios_cpf FROM venda');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['id']}</td>
    <td>{$linha['valor']}</td>
    <td>{$linha['forma_pagamento']}</td>
    <td>{$linha['fk_clientes_cpf']}</td>
    <td>{$linha['fk_funcionarios_cpf']}</td>
    <td>
    <a href='editar_venda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_venda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
        }

        ?>
        <?php
        include_once('partials/footer.php');
        ?>