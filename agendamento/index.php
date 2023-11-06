<?php 
session_start();
include_once("../conexao.php");
include_once("../clientes/partials/header.php");

if(isset($_SESSION['tipo'])){

if($_SESSION['tipo']==0){

    $cpf= $_SESSION['cpf'];

    include_once('../clientes/componentes/navbar.php');
echo'
    <h1>Meus agendamentos</h1>
    <table class="table">
        <tr>
            <th scope="col">horario</th>
            <th scope="col">data agendamento</th>
            
        </tr>';
        <?php
        // query libera qualquer query
        $select = $conexao->query('SELECT horario,data_agendamento FROM agendamento WHERE cpf=$cpf');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['horario']}</td>
    <td>{$linha['data_agendamento']}</td>
  
    </tr>";
        }

       echo"</table>";

    }}


    
if($_SESION['tipo']==1){
    include_once('../adm/componentes/navbar.php');
    echo'
    <h1>ver agendamentos</h1>
    <table class="table">
        <tr>
            <th scope="col">cpf</th>
            <th scope="col">horario</th>
            <th scope="col">data agendamento</th>
            <th scope="col">id usuarioi</th>
            <th scope="col">acoes</th>
       
        </tr>';
       
     
        $select = $conexao->query('SELECT id,cpf,horario,data_agendamento FROM agendamento');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td scope='row'>{$linha['cpf']}</td>
    <td>{$linha['horario']}</td>
    <td>{$linha['data agenda']}</td>
    <td>{$linha['id_usuario']}</td>
   
    <td>
    <a href='editar_agendamento.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
        }

        echo"</table>";

 } else{
        header('location:../clientes/clientes.php');
    }


?>