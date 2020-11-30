
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

$result = $conexao -> query("SELECT * FROM cadastro WHERE login = '".$_POST['login']."' and senha = '".$_POST['senha']"'");

if (mysql_num_rows($result) == 0) {
  echo "login invalido ";
}
else 
header ('Location: index.php');
/*
if (isset($_GET['']))
{
  $result = $conexao -> query("SELECT * FROM cadastro where usuarioID = ".$_GET[''] );

  foreach ($result as $row )
    {
   $usuarioID = $row["usuarioID"]; 
   $login = $row["login"];
   $senha = $row["senha"];
  
    }
}

echo " ...";

*/

?>

<!DOCTYPE html>
<html>
<head>
  <title>Projeto</title>
</head>
<body>
     <form method="POST" action="index.php">
      <br/>

     <br/>
     <label for="login">login:</label>
     <input type="text" name="login" placeholder="Usuario " id="login" value="" required>
     <br/>
     <label for="senha">Senha: </label>
     <input type="varchar" name="senha" placeholder="senha" id="senha" value="" required>
     <br/>

     <br/>
     
     
       
 <?php  if (!empty($_POST[''])): ?>
        <input type="submit" value="entrar" name="btnEntrar">

     <br/>
     <br/>


      <table>
        <tr> <!-- 1 linha -->
          <td>  <!-- coluna -->
            login
             </td>  
          <td>
                    senha
          </td>

        </tr>


             <?php
             foreach ($result as $row )
             {
             ?>


            <tr> <!-- 2 linha -->
          <td>  
             <?php echo  $row["user"]  ?>
             </td>  
          <td>
                     <?php echo $row["senha"]  ?>
          </td>

          <td>
             
            <a href="index.php?=<?php echo $row["usuarioID"]?>"></a>
          </td>
          <td>
             
            <a href="crud.php?del=<?php echo $row["AlunoID"]?>"></a>
          </td>
          
        </tr>

            <?php
             }
            ?>


      </table>  
     </form>
</body>
</html>



