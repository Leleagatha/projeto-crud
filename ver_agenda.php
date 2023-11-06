
<?php 
include_once('conexao.php');
?>
<html lang="en">
<?php
include_once('partials/header.php');
?>
<div class="container">
    <a href="index_agenda.php" class="btn btn-primary mb-4 mb-4">Adicionar agenda</a>
    <h1>lista de agenda</h1>
    <table class="table">
        <tr>
            <th scope="col">id</th>
            <th scope="col">horario</th>
            <th scope="col">data</th>
            <th scope="cold">cliente cpf</th>
        </tr>
        <?php
        // query libera qualquer query
        $select = $conexao->query('SELECT id,horario,data,fk_cliente_cpf FROM venda');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['id']}</td>
    <td>{$linha['horario']}</td>
    <td>{$linha['data']}</td>
    <td>{$linha['fk_cliente_cpf']}</td>
    <td>
    <a href='editar_agenda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_agenda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
        }

        ?>
        <?php
        include_once('partials/footer.php');
        ?>