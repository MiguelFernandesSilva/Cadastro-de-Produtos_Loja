<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aula com formulário e método POST">
    <meta name="keywords" content="Formulário, método POST, Dados">
    <meta name="author" content="Miguel Fernandes Silva">
    <title> Cadastro </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    include_once "funcoes.php";
    $dados = [];
    $id = $_GET['id'] ?? '';
    $registro = [];
    if($id >= 0){
        $registro = $dados[$id];
    }
    ?>
    <div id="container">
        <h1>Cadastro de Usuários</h1>
        <form action="salvar.php" method="post">
            <div>
                <label for="nome">Nome</label> <span> * </span> <br>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="<?=$registro['nome'] ?? ''?>"
                >
            </div>
            <div>
                <label for="email">Email</label> <br>
                <input 
                type="text" 
                name="email" 
                id="email"
                value="<?=$registro['email'] ?? ''?>"
                >
            </div>
            <div>
                <label for="telefone">Telefone</label> <br>
                <input 
                type="text" 
                name="telefone" 
                id="telefone"
                value="<?=$registro['telefone'] ?? ''?>"
                >
            </div>
            <div class="buttons-div">
                <button type="reset">Cancelar</button>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
    <hr><hr>
    <table>
        <thead>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Telefone </th>
            <th> Ações </th>
        </thead>
        <tbody>
            <?php
            $dados = lerDados('dados.json');
            foreach($dados as $id => $item){
            ?>

            <tr>
                <td><?=$id?></td>
                <td><?=$item['nome']?></td>
                <td><?=$item['email']?></td>
                <td><?=$item['telefone']?></td>
                <td><a href="index.php?id=<?=$id?>">Editar</a></td>
            </tr>

            <?php
            };
            ?>
        </tbody>
    </table>
</body>
</html>