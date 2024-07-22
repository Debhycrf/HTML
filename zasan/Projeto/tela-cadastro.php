<?php
    if(isset($_POST['submit']))
    {
        /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');

        print_r('Email: ' . $_POST['email']);
        print_r('<br>');

        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');

        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');

        print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');

        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');

        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');

        print_r('Endereço: ' . $_POST['endereco']);
        print_r('<br>');*/

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nascimento, cidade, estado, endereco) VALUES ('$nome', '$email','$senha', '$telefone','$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="css/css-externo.css">
</head>
<body>
    <div class="box">
        <form action="tela-cadastro.php" method="POST">
            <fieldset>
                <legend>Cadastro de clientes</legend>
                
                <div class="inputBox">

                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome completo</label>
                </div> <br> <br>

                <div class="inputBox">

                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> Email</label>
                </div> <br><br>

                <div class="inputBox">

                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="email" class="labelInput"> Senha</label>
                </div> <br><br>

                <div class="inputBox">

                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"> Telefone</label>
                </div> <br><br>

                <p>Gênero:</p>

                <input type="radio" name="genero" id="feminino" value="feminino" required> 
                <label for="feminino"> Feminino </label><br>

                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label> <br><br>

                <label for="data_nascimento"> Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required><br> <br>

                <div class="inputBox">

                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div> <br> <br>

                <div class="inputBox">

                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div> <br> <br>

                <div class="inputBox">

                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div> <br> <br>



                <input type="submit" name="submit" id="submit">


                
            </fieldset>
        </form>

    </div>
</body>
</html>