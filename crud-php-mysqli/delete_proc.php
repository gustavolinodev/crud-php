<?php 
session_start();
include_once("conection.php");

$id = $_GET['id'];

$query = "DELETE FROM list WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn)){

    $_SESSION['apagado_ok'] = "Usuário Apagado com Sucesso";
    header("Location:index.php");
}else{

    $_SESSION['apagado_ok'] = "Usuário não apagado";
    header("Location:index.php");
}