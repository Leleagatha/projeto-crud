
<?php
include_once("./partials/header.php");
if (isset ($_GET['cpf'])){
$cpf=$_GET['cpf'];
}else{
    header('location:ver_agenda.php');
}
?>
<div class="container">
    
<form action="atualizar_agenda.php
" method="post">
<?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT id,horario,data,fk_clientes_cpf FROM agenda where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> id: </label>
        <input type='text' id='id' name='id' class='form-control' value=$linha[id] />

        <label for='' class='form-label'>horario:</label>
        <input type='text' id='horario' name='horario' class='form-control'value=$linha[horario] readonly />

        <label for='' class='form-label'>data: </label>
        <input type='text' id='data' name='data' class='form-control' value=$linha[data]  />

        <label for='' class='form-label'>fk_cliente_cpf:</label>
        <input type='text' id='fk_cliente_cpf' name='fk_cliente_cpf' class='form-control' value=$linha[fk_cliente_cpf]  readonly />

        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>

        <a href='editar_agenda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar_agenda.php
        
        
        
        
        .php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
        </td>
       ";
     }
        ?>
</form>
</div>
<?php
include_once("./partials/footer.php");
?>


