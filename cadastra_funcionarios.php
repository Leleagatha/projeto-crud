<?php 
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$carga_horaria=$_POST['carga_horaria'];
$endereco=$_POST['endereco'];

// usaremos prepare na insercao de dados e na atualizacao de dados;


    try{
      $inserir=$conexao->prepare('INSERT INTO funcionarios (cpf,nome,telefone,carga_horaria,endereco) VALUES (:cpf,:nome,:telefone,:carga_horaria,:endereco)');
      $inserir->execute(
    [ 
    ':cpf' => $cpf,
    ':nome' => $nome,
    ':telefone'=> $telefone,
    ':carga_horaria'=> $carga_horaria,
    ':endereco'=> $endereco
    ]
);
header('location:ver_funcionarios.php');
}
catch(PDOException $erro){
    echo $erro->getMessage();
    header ('location:index_funcionarios.php');

}

    // redireciona o usuario para a pag escolhida;
    //header('location:index.php');


?>