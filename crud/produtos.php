<?php

$server = "localhost";
$user = "root";
$password = "";
$banco = "projeto";

//criar uma conexão
$conexao = new mysqli($server, $user, $password, $banco);

// Testar a conexão
if($conexao -> connect_error)
  echo "A conexão falhou: ".$conexao -> connect_error;

$result = $conexao -> query("SELECT * FROM cadastro");

if (isset($_GET['']))
{
  $resultAlt = $conexao -> query("SELECT * FROM cadastro where AlunoID = ".$_GET['alt'] );

  foreach ($resultAlt as $row )
    {
     $AlunoIDAlt = $row["AlunoID"]; 
   $NomeAlt = $row["Nome"];
   $CPFAlt = $row["CPF"];
   $SexoAlt = $row["Sexo"];
    }
}



?>