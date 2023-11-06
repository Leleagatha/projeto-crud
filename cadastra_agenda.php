
<?php 
include_once('conexao.php');
$id=$_POST['id'];
$valor=$_POST['horario'];
$forma_pagamento=$_POST['data'];
$fk_clientes_cpf=$_POST['fk_cliente_cpf'];


echo " $id  $horario  $data $fk_cliente_cpf ";

// usaremos prepare na insercao de dados e na atualizacao de dados;


    try{
      $inserir=$conexao->prepare('INSERT INTO agenda (id,horario,data,fk_cliente_cpf) VALUES (:id,:horario,:data,:fk_cliente_cpf)');
      $inserir->execute(
    [ 
    ':id' => $id,
    ':horario' => $horario,
    ':data'=> $data,
    ':fk_cliente_cpf'=> $fk_cliente_cpf
    ]
);
//header('location:ver_agenda.php');
}
catch(PDOException $erro){
    echo $erro->getMessage();
  //  header ('location:index_agenda.php');

}

    // redireciona o usuario para a pag escolhida;
    //header('location:index_agenda.php');


?>

