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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/teladashboard.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Admin painel</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i><img src="../img/caixa.png" alt="caixa" class="sidebar-boximg"></i>
                        <div class="titulo">Stock</div>
                    </a>
                </li>
                <li>
                    <a href="teladashboard.php">
                        <i><strong>></strong></i>
                        <div class="titulo">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="telaestoque.php">
                        <i class="fas fa-th-large"></i>
                        <div class="titulo">Estoque</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="titulo">Custos</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="titulo">Configurações</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="titulo">Ajuda</div>
                    </a>
                </li>
                
                <li>
                    <a href="sair.php">
                        <i class="sair" ><strong>X</strong></i>
                        <div class="titulo sair"><strong>Sair</strong></div>
                    </a>
                </li>

            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="Pesquise">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="../img/1.png" alt="avatar_usuário">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="numero">6</div>
                        <div class="card-name">Operações do dia</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="numero">6</div>
                        <div class="card-name">Novos Produtos</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="numero">6</div>
                        <div class="card-name">Total de produtos</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="numero">R$2.659,50</div>
                        <div class="card-name">Custo</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="ultimos-movimentos">
                    <div class="heading">
                        <h2>Últimos movimentos do estoque</h2>
                        <a href="#" class="btn">Ver todos</a>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Nome</td>
                            <td>Produto</td>
                            <td>Custo R$</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rafael</td>
                                <td>Sapato</td>
                                <td>1500,00</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Márcia</td>
                                <td>Tênis</td>
                                <td>299,90</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Pedro</td>
                                <td>Camiseta Nike</td>
                                <td>89,90</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Isabele</td>
                                <td>Camiseta Vans</td>
                                <td>109,90</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Sofia</td>
                                <td>Terno</td>
                                <td>599,90</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>João</td>
                                <td>Chinelo</td>
                                <td>59,90</td>
                                <td>
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
