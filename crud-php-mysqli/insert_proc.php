<?php 

include_once("conection.php");


$name =  $_POST['name'];
$cpf =  $_POST['cpf'];
$phone = $_POST['phone'];

$query = "INSERT INTO list (name, cpf, phone, created) VALUES ('$name','$cpf','$phone', NOW())";

$result = mysqli_query($conn, $query);
 echo mysqli_error($conn);
 if(mysqli_insert_id($conn)){ //VERIRICA SE FOI INSERIDO COM SUCESSO
     $_SESSION['mensagem'] = "Inserido com Sucesso";
     header("Location: index.php");
   
 }else{
     $_SESSION['mensagem'] = "Erro ao inserir";
     header("Location: index.php");
 }