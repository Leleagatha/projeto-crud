<?php 
include_once("conexao.php");
if(isset($_GET['cpf'])){
    $cpf=$_GET['cpf'];
}else{
        header("location:ver_venda.php");
     }
try{

    $deletar=$conexao->query ("DELETE FROM venda WHERE cpf=$cpf;");
header("location:ver_venda.php");
}catch(Exception $e) {
echo $e->getMessage();}
?>