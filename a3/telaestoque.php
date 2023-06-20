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
        <table class="records">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Custo R$</th>
                    <th>Ação</th>     
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dorflex</td>
                    <td>2</td>
                    <td>23,90</td>
                    <td>
                        <button type="button" class="button green">editar</button>
                        <button type="button" class="button red">excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Novo Produto</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form class="modal-form">
                    
                    <input type="text"   class="modal-field" placeholder="Produto">
                    <input type="number" class="modal-field" placeholder="Quantidade">
                    <input type="number" class="modal-field" placeholder="Custo R$">
                    <input type="date"   class="modal-field" placeholder="Dia do lançamento">
                
                </form>
                <footer class="modal-footer">
                    <button class="button green">Salvar</button>
                    <button class="button blue">Cancelar</button>
                </footer>
            </div>
        </div>
    </main>
    <footer>
        <a href="index.html" class="voltar">
        Voltar
        </a>
    </footer>
</body>
</html>
