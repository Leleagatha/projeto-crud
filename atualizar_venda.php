<?php 
include_once("./conexao.php");
$id=$_POST['id'];
$valor=$_POST['valor'];
$forma_pagamento=$_POST['forma_pagamento'];
$fk_clientes_cpf=$_POST['fk_clientes_cpf'];
$fk_funcionarios_cpf['fk_funcionarios_cpf'];

try{
$update=$conexao->prepare("UPDATE venda SET id=:id, valor=:valor,  forma_pagamento=:forma_pagamento,  fk_clientes_cpf=:fk_clientes_cpf fk_funcionarios_cpf=:fk_funcionarios_cpf WHERE cpf=:cpf;");
$update->execute(
[
    ':id' => $id,
    ':valor' =>$valor,
    ':forma_pagamento' =>$forma_pagamento,
    ':fk_clientes_cpf' =>$fk_clientes_cpf,
    ':fk_funcionarios_cpf' => $fk_funcionarios_cpf
]
);
return header('location:ver_venda.php');  
}catch(exception $e){
    echo $e->getMessage();
}

?>