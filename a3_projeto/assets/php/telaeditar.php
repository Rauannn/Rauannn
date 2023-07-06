<?php
    session_start();
    // print_r($_SESSION);
    //se não existir a var email - destroi e se não existir uma variável senha - destrói a sessão
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        //destruir qualquer dado que tenha um email e uma senha se não existir no banco
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: teladelogin.hp');
    }
    // $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios WHERE id = ".$_REQUEST["id"];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../css/telaestoque.css">
</head>
<body>
    <header>
        <h1 class="header-title">Editar</h1>
    </header>
    <main>


        <div clas="inputcenter">
            <form class= "inputcenter"action="salvarproduto.php" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <input type="text" name="produto"  class="modal-field nova" placeholder="Produto">
                <br>
                <input type="number" name="quantidade" class="modal-field nova" placeholder="Quantidade">
                <br>
                <input type="text" name="custo" class="modal-field nova" placeholder="Custo R$">
                <br>
                <input type="date"  name="data" class="modal-field nova" placeholder="Dia do lançamento">
                <br>
                <div>
                    <button class="button green botao" type="submit">Salvar</button>
                    <br>
                </div>
            </form>
        </div>


    
    </main>
    <footer>
        <a href="telaestoque.php" class="voltar">
        Voltar
        </a>
    <footer>
    
</body>
</html>
