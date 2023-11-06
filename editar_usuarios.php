<?php
include_once("./partials/header.php");
if (isset ($_GET['cpf'])){
$cpf=$_GET['cpf'];
}else{
    header('location:ver_usuario.php');
}
?>
<div class="container">
    
<form action="atualizar.php
" method="post">
<?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT cpf,nome,email,telefone FROM clientes where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> Nome: </label>
        <input type='text' id='nome' name='nome' class='form-control' value=$linha[nome] />
        <label for='' class='form-label'>E-mail:</label>
        <input type='text' id='e-mail' name='e-mail' class='form-control'value=$linha[email] readonly />
        <label for='' class='form-label'> Telefone: </label>
        <input type='text' id='telefone' name='telefone' class='form-control' value=$linha[telefone]  />
        <label for='' class='form-label'>CPF:</label>
        <input type='text' id='cpf' name='cpf' class='form-control' value=$linha[cpf]  readonly />
        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>
        <a href='editar_usuarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
        </td>
       ";
     }
        ?>
</form>
</div>
<?php
include_once("./partials/footer.php");
?>