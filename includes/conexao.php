<?php
	$servidor = "localhost";
	$usuario = "root"; //padrão wamp
	$senha = "";//padrão wamp
	$dbname = "wp";
	
	//Criando a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);