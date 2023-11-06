<?php
session_start();
include_once("../../conexao.php");
$email=$_POST['email'];
$senha=hash("md5",$_POST['senha']);

//echo $email,'',$senha,'';

$login=$conexao->query("SELECT cpf,email,senha,tipo FROM clientes WHERE email='$email' AND senha='$senha';");
if($login->rowCount ()> 0) 
{while($linha=$login->fetch(PDO::FETCH_ASSOC)){
$_SESSION['cpf']=$linha['cpf'];
$_SESSION['tipo']=$linha['tipo'];
$_SESSION['nome']=$linha['nome'];
    }
    if($_SESSION['tipo']==0){
        header('location:../../clientes/index.php');
    }elseif($_SESSION['tipo']==1){
        header('location:../../adm/index.php');
    }else{
        header('location:../../clientes/index.php');
    }
    }else{
echo "usuario ou senha incorreto";}
    
?>