<?php 
include_once('conexao.php');
?>
<html lang="en">
<?php
include_once('partials/header.php');
?>
<div class="container">
    <a href="index.php" class="btn btn-primary mb-4 mb-4">Adicionar Clientes</a>
    <h1>lista de clientes</h1>
    <table class="table">
        <tr>
            <th scope="col">cpf</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">telefone</th>
            <th scope="cold">acoes</th>
        </tr>
        <?php
        // query libera qualquer query
        $select = $conexao->query('SELECT cpf,telefone,nome,email FROM clientes');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['cpf']}</td>
    <td>{$linha['nome']}</td>
    <td>{$linha['email']}</td>
    <td>{$linha['telefone']}</td>
    <td>
    <a href='editar_usuarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
        }

        ?>
        <?php
        include_once('partials/footer.php');
        ?>