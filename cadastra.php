<?php 
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=hash("md5",$_POST['senha']);
$confirmarsenha=hash("md5",$_POST['confirmarsenha']);
$telefone=$_POST['telefone'];
$tipo=$_POST['tipo'];

 //echo "O seu nome é $nome seu email é $email sua senha é $senha e seu confirmar senha é $confirmarsenha";
// usaremos prepare na insercao de dados e na atualizacao de dados;
if($senha==$confirmarsenha){

    try{
      $inserir=$conexao->prepare('INSERT INTO clientes (cpf,nome,telefone,email,senha,tipo) VALUES (:cpf,:nome,:telefone,:email,:senha,:tipo)');
      $inserir->execute(
    [ 
    ':cpf' => $cpf,
    ':nome' => $nome,
    ':telefone'=> $telefone,
    ':email'=> $email,
    ':senha'=> $senha,
    ':tipo'=> $tipo
    ]
);
header('location:ver_usuario.php');
}
catch(PDOException $erro){
    echo $erro->getMessage();
}
}else{
    // redireciona o usuario para a pag escolhida;
    //header('location:index.php');
   header ('location: index.php');
}

?>