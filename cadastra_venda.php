<?php 
include_once('conexao.php');
// $id=$_POST['id'];
$valor=$_POST['valor'];
$forma_pagamento=$_POST['forma_pagamento'];
$fk_clientes_cpf=$_POST['fk_clientes_cpf'];
$fk_funcionarios_cpf=$_POST['fk_funcionarios_cpf'];

echo " $valor  $forma_pagamento $fk_clientes_cpf $fk_funcionarios_cpf ";

// usaremos prepare na insercao de dados e na atualizacao de dados;


    try{
      $inserir=$conexao->prepare('INSERT INTO venda (valor,forma_pagamento,fk_clientes_cpf,fk_funcionarios_cpf) VALUES (:valor,:forma_pagamento,:fk_clientes_cpf,:fk_funcionarios_cpf)');
      $inserir->execute(
    [ 
    // ':id' => $id,
    ':valor' => $valor,
    ':forma_pagamento'=> $forma_pagamento,
    ':fk_clientes_cpf'=> $fk_clientes_cpf,
    ':fk_funcionarios_cpf'=> $fk_funcionarios_cpf
    ]
);
//header('location:ver_venda.php');
}
catch(PDOException $erro){
    echo $erro->getMessage();
  //  header ('location:index_venda.php');

}

    // redireciona o usuario para a pag escolhida;
    //header('location:index_venda.php');


?>