<?php 
session_start();
if (isset($SESSION['tipo'])){
    if($_SESSION['tipo']=! 1){
        header('location:../clientes/index.php');
    }
}else{
    header('location:../clientes/index.php');
}
include_once("../partials/header.php");
include_once("../componentes/navbar.php");
include_once("../conexao.php");
include_once("../ver_usuario.php");
?>
<?php 
include_once("partials/footer.php");
?>
