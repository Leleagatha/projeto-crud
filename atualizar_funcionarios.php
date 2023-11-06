<?php 
include_once("./conexao.php");
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$carga_horaria=$_POST['carga_horaria'];
$endereco=$_POST['endereco'];

try{
$update=$conexao->prepare("UPDATE funcionarios SET nome=:nome, telefone=:telefone,  carga_horaria=:carga_horaria,  endereco=:endereco WHERE cpf=:cpf;");
$update->execute(
[
    ':nome' => $nome,
    ':telefone' =>$telefone,
    ':carga_horaria' =>$carga_horaria,
    ':endereco' =>$endereco,
    ':cpf' => $cpf
]
);
return header('location:ver_funcionarios.php');  
}catch(exception $e){
    echo $e->getMessage();
}

?>