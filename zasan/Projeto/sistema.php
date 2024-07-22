<?php
session_start();
include_once('config.php');
//print_r($_SESSION)

if((!isset ($_SESSION['email'])== true) and (!isset
($_SESSION['senha']) == true ))
{
   header('Location: tela-login.html');
}
$logado = $_SESSION['email'];
$sql = "SELECT * FROM usuarios ORDER BY idusuarios DESC";

$result = $conexao->query($sql);
//print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">=
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous">
    <link rel="stylesheet" href="css/css-externo.css"> 

    <title>Sistema</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
       SISTEMA
         <div class="d-flex"></div>
            <a href="sair.php"class="btn btn-danger me-5"
            style="background-color: brown;">SAIR</a>
         </div>
      </nav>

      <?php
         echo "<h1> Bem vindo(a) <u>$logado</u> </h1>";
      ?>

      <div class="m-5">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while ($user_data = mysqli_fetch_assoc($result)) 
        {
         echo"<tr>";
         echo "<td>" .$user_data['idusuarios']."</td>";
         echo "<td>" .$user_data['nome']."</td>";
         echo "<td>" .$user_data['email']."</td>";
         echo "<td>" .$user_data['senha']."</td>";
         echo "<td>" .$user_data['telefone']."</td>";
         echo "<td>" .$user_data['sexo']."</td>";
         echo "<td>" .$user_data['data_nascimento']."</td>";
         echo "<td>" .$user_data['idusuarios']."</td>";
         echo "<td>" .$user_data['cidade']."</td>";
         echo "<td>" .$user_data['estado']."</td>";
         echo "<td>" .$user_data['endereco']."</td>";
         //echo "<td>" .$user_data['...']."</td>";
         
         
        }
   ?>

  </tbody>


</table>

      </div>
    
</body>
</html>