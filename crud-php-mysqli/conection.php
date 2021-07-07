<?php 

//Variáveis para configuração da conexão ao banco de dados
    $servidor = "localhost";  //ip_servidor
	$usuario = "root"; //usuario_mysql
	$senha = ""; //senha_mysql
	$dbname = "crud"; //nome_do_banco
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);