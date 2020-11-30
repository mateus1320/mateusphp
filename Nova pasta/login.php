<?php

$server = "localhost";
$user = "root";
$password = "";
$banco = "teste";

//criar uma conexão
$conexao = new mysqli($server, $user, $password, $banco);

// Testar a conexão
if($conexao -> connect_error)
	echo "A conexão falhou: ".$conexao -> connect_error;

if(isset($_POST['btnLogar']))
{
	$result = $conexao -> query("SELECT * FROM usuarios WHERE Nome = '".$_POST['nome']."' and Senha = '".$_POST['senha']."'");

	if (count($result) == 0)     
	    echo "Login inválido!"; 
	else 
	    header('Location: produtos.php');
}

?>	