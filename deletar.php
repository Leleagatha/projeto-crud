<?php 
include_once("conexao.php");
if(isset($_GET['cpf'])){
    $cpf=$_GET['cpf'];
}else{
        header("location:ver_usuario.php");
     }
try{

    $deletar=$conexao->query ("DELETE FROM clientes WHERE cpf=$cpf;");
header("location:ver_usuario.php");
}catch(Exception $e) {
echo $e->getMessage();}
?>