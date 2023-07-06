<?php
    if(isset($_POST['email']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['senha']);
    

    include_once('connection.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //passa as variáveis para os devidos campos
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/teladecadastro.css">
</head>

<body>

    <div id="form" class="form">

        <form name="form" method="POST" action="teladecadastro.php">
            <h1>Cadastro</h1><br>
            <br>
            <div class="divlabel1" <label><strong>Nome</strong></label>
                <br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                <br><br><br>
                <label><strong>E-mail</strong></label>
                <br>
                <input type="email" id="email" name="email" placeholder="Escreva seu e-mail">
                <br><br><br>
                <label><strong>Senha</strong></label>
                <br>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha!">
            </div>
            <br>
            <div>
                <button class="button" type="submit" name="submit" value="Login"><strong>Cadastrar</strong></button>
                <br>
                <a href="teladelogin.php" class="ancora a">Já possui uma conta?</a>
            </div>
        </form>
    </div>

</body>

</html>
