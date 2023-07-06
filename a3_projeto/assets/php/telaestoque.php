<?php

    include("connection.php");

    session_start();
    // print_r($_SESSION);
    //se não existir a var email - destroi e se não existir uma variável senha - destrói a sessão
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        //destruir qualquer dado que tenha um email e uma senha se não existir no banco
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: teladelogin.php');
    }
    // $logado = $_SESSION['email'];
    //--
    //--@inibir o erro
    switch(@$_REQUEST["salvarproduto.php"]){
        case"salvar":
            include("salvarproduto.php");
        break;
        case"editar";
            include("salvarproduto.php");
        break;
    }



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaestoque.css">
    <script src="../js/main.js" defer></script>
    <title>CRUD</title>
</head>
<body>
    <header>
        <h1 class="header-title">ESTOQUE</h1>
    </header>
    <main>
        <button type="button" class="button blue mobile" id="cadastrarProduto">Cadastrar Produto</button>

        <?php
            include("connection.php");
            $sql = "SELECT * FROM produtos";

            $res = $conexao->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print"<table class='records'>";
                    print"<thead>";
                        print"<tr>";
                            print"<th>#</th>";
                            print"<th>Produto</th>";
                            print"<th>Quantidade</th>";
                            print"<th>Custo Unitário (R$)</th>";
                            print"<th>Ação</th>";
                        print"</tr>";
                    print"</thead>";
                    while($row = $res->fetch_object()){//torna todos os objetos que são os dados e coloca na var
                        print"<tbody>";
                            print"<tr>";
                                print"<td>".$row->id."</td>";
                                print"<td>".$row->produto."</td>";
                                print"<td>".$row->quantidade."</td>";
                                print"<td>".$row->custo."</td>";
                                print"<td>
                                        <button type='button' class='button green' onclick=\"location.href='telaeditar&id=".$row->id."';\">editar</button>
                                        <button type='button' class='button red'>excluir</button>
                                        </td>";
                            print"</tr>";
                        print"</tbody>";
                    }
                print"</table>";
            }
            else{
                print"<p>Cadastre seu produto para gerar a tabela</p>";
            }
        ?>

        <!-- modal cadastrar produto  -->

        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Novo Produto</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form class="modal-form" action="salvarproduto.php" method="post">
                    <input type="hidden" name="acao" value="cadastrar">
                    <input type="text" name="produto"  class="modal-field" placeholder="Produto" value="<?php print $row->nome; ?>">
                    <input type="number" name="quantidade" class="modal-field" placeholder="Quantidade">
                    <input type="text" name="custo" class="modal-field" placeholder="Custo R$">
                    <input type="date"  name="data" class="modal-field" placeholder="Dia do lançamento">
            
                    <footer class="modal-footer">
                    <button class="button green" type="submit">Salvar</button>
                    <button class="button blue" id="cancelar" type="button">Cancelar</button>
                    </footer>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <a href="teladashboard.php" class="voltar">
        Voltar
        </a>
    </footer>
</body>
</html>

