<?php
include_once("./partials/header.php");
if (isset ($_GET['cpf'])){
$cpf=$_GET['cpf'];
}else{
    header('location:ver_venda.php');
}
?>
<div class="container">
    
<form action="atualizar_venda.php
" method="post">
<?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT id,valor,forma_pagamento,fk_clientes_cpf,fk_funcionarios_cpf FROM venda where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> id: </label>
        <input type='text' id='id' name='id' class='form-control' value=$linha[id] />

        <label for='' class='form-label'>valor:</label>
        <input type='text' id='valor' name='valor' class='form-control'value=$linha[valor] readonly />

        <label for='' class='form-label'> forma_pagamento: </label>
        <input type='text' id='forma_pagamento' name='forma_pagamento' class='form-control' value=$linha[forma_pagamento]  />

        <label for='' class='form-label'>fk_clientes_cpf:</label>
        <input type='text' id='fk_clientes_cpf' name='fk_clientes_cpf' class='form-control' value=$linha[fk_clientes_cpf]  readonly />

        <label for='' class='form-label'>fk_funcionarios_cpf :</label>
        <input type='text' id='fk_funcionarios_cpf ' name='fk_funcionarios_cpf' class='form-control' value=$linha[fk_funcionarios_cpf]  readonly />

        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>

        <a href='editar_venda.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar_venda
        
        
        
        
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