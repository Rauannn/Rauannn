<?php
    //iniciar sessão
    session_start();

    // print_r($_REQUEST)
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //se existir var POST submit - acessa
        include_once("connection.php");
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email:' . $email);
        // print_r("<br>");
        // print_r('Senha:' . $senha);

        //select para verificar se há um email exatamente igual ao do digitado a tela de login e senha também.
        $sql = " SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao -> query($sql);

        // print_r($sql);
        // print_r($result);

        //se num rows for igual a 0 as informações no banco não existem, caso for 1 existe 
        if(mysqli_num_rows($result) < 1)
        {
            //caso não exista nenhum registro com email e senha, irá destruir as variáveis
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            //nao existe
            header('Location: teladelogin.php');

        }

        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            //existe
            header('Location: teladashboard.php');

        }

    }
        //se não existir volta para a tela de login
    else
    {
        header('Location: teladelogin.php');
    }

?>
