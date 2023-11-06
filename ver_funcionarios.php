<?php 
include_once('conexao.php');
?>
<html lang="en">
<?php
include_once('partials/header.php');
?>
<div class="container">
    <a href="index_funcionarios.php" class="btn btn-primary mb-4 mb-4">Adicionar funcionarios</a>
    <h1>lista de funcionarios</h1>
    <table class="table">
        <tr>
            <th scope="col">cpf</th>
            <th scope="col">nome</th>
            <th scope="col">carga horaria</th>
            <th scope="col">telefone</th>
            <th scope="cold">endereco</th>
        </tr>
        <?php
        // query libera qualquer query
        $select = $conexao->query('SELECT cpf,nome,carga_horaria,telefone,endereco FROM funcionarios');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['cpf']}</td>
    <td>{$linha['nome']}</td>
    <td>{$linha['carga_horaria']}</td>
    <td>{$linha['telefone']}</td>
    <td>{$linha['endereco']}</td>
    <td>
    <a href='editar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
        }

        ?>
        <?php
        include_once('partials/footer.php');
        ?>