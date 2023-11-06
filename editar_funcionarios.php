<?php
include_once("./partials/header.php");
if (isset ($_GET['cpf'])){
$cpf=$_GET['cpf'];
}else{
    header('location:ver_funcionarios.php');
}
?>
<div class="container">
    
<form action="atualizar_funcionarios.php
" method="post">
<?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT cpf,nome,carga_horaria,telefone,endereco FROM funcionarios where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> Nome: </label>
        <input type='text' id='nome' name='nome' class='form-control' value=$linha[nome] />

        <label for='' class='form-label'>carga_horaria:</label>
        <input type='text' id='carga_horaria' name='carga_horaria' class='form-control'value=$linha[carga_horaria] readonly />

        <label for='' class='form-label'> Telefone: </label>
        <input type='text' id='telefone' name='telefone' class='form-control' value=$linha[telefone]  />

        <label for='' class='form-label'>CPF:</label>
        <input type='text' id='cpf' name='cpf' class='form-control' value=$linha[cpf]  readonly />

        <label for='' class='form-label'>endereco:</label>
        <input type='text' id='endereco' name='endereco' class='form-control' value=$linha[endereco]  readonly />

        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>

        <a href='editar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
        </td>
       ";
     }
        ?>
</form>
</div>
<?php
include_once("./partials/footer.php");
?>