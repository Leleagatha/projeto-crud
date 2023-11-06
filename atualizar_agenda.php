<?php 
include_once("./conexao.php");
$id=$_POST['id'];
$horario=$_POST['horario'];
$data=$_POST['data'];
$fk_cliente_cpf=$_POST['fk_cliente_cpf'];

try{
$update=$conexao->prepare("UPDATE agenda SET id=:id, horario=:horario,  data=:data,  fk_cliente_cpf=:fk_cliente_cpf WHERE cpf=:cpf;");
$update->execute(
[
    ':id' => $id,
    ':horario' =>$horario,
    ':data' =>$data,
    ':fk_cliente_cpf' =>$fk_cliente_cpf,
]
);
return header('location:ver_agenda.php');  
}catch(exception $e){
    echo $e->getMessage();
}

?>