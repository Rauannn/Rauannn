<?php
    include("connection.php");
    
    //Create
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $produto = $_POST["produto"];
            $quantidade = $_POST["quantidade"];
            $custo = $_POST["custo"];
            $data = $_POST["data"];
            
            $sql = "INSERT INTO produtos (produto,quantidade,custo,data) VALUES ('$produto','$quantidade','$custo','$data')";

            $res = $conexao->query($sql);
            
            if($res == true){

                print"<script>location.href='telaestoque.php';</script>";
            
            }else{

                print"<script>location.href='telaestoque.php';</script>";
            }
            break;
    

        //Edit

        case 'editar':
            $produto = $_POST["produto"];
            $quantidade = $_POST["quantidade"];
            $custo = $_POST["custo"];
            $data = $_POST["data"];
            
            $sql = "UPDATE produtos SET
                        produto = '{$produto}',
                        quantidade = '{$quantidade}', 
                        custo = '{$custo}',
                        data = '{$data}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conexao->query($sql);
            
            if($res == true){

                print"<script>location.href='telaestoque.php';</script>";
            
            }else{

                print"<script>location.href='telaestoque.php';</script>";
            }

            break;
        case 'excluir':    
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conexao->query($sql);

            if($res == true){

                print"<script>location.href='telaestoque.php';</script>";
            
            }else{

                print"<script>location.href='telaestoque.php';</script>";
            }

    
    }

?>
