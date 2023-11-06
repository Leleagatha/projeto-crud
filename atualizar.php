<?php 
include_once("./conexao.php");
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];

try{
$update=$conexao->prepare("UPDATE clientes SET nome=:nome, telefone=:telefone WHERE cpf=:cpf;");
$update->execute(
[
    ':nome' => $nome,
    ':telefone' =>$telefone,
    ':cpf' => $cpf
]
);
return header('location:ver_usuario.php');  
}catch(exception $e){
    echo $e->getMessage();
}

?>

