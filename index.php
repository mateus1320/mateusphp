
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="login-container">
    <h1>Login</h1>
    <form method="GET" action="">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" placeholder="Digite sua senha">
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>
    <div id="social-container">
      <p>Ou entre pelas suas redes sociais</p>
      <i class="fa fa-facebook-f"></i>
      <i class="fa fa-linkedin"></i>
    </div>
    <div id="register-container">
      <p>Ainda não tem uma conta?</p>
      <a href="#">Registrar</a>
    </div>
  </div>
</body>
</html>