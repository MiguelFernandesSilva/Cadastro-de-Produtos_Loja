<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Fernandes Silva">
    <title> Loja </title>
</head>
<body>
    <?php
    include_once "salvar.php";
    $data = readData('dados.json');
    $id = $_GET['id'] ?? '';
    $register = [];
    if($id != ''){
        $register = $data[$id];
    }
    ?>
    <div class="container">
        <form action="salvar.php" method="post">
            <input
            type="hidden"
            name="id"
            value="<?=$id?>"
            >

            <input
            type="text"
            name="nome"
            id="nome"
            value="<?=$register['nome'] ?? ''?>"
            placeholder="Nome"
            >

            <input
            type="text"
            name="descricao"
            id="description"
            value="<?=$register['descricao'] ?? ''?>"
            placeholder="Descrição"
            >

            <input
            type="number"
            name="valor"
            id="value"
            value="<?=$register['valor'] ?? ''?>"
            placeholder="Valor"
            >

            <input
            type="url"
            name="imagem"
            id="image"
            value="<?=$register['imagem'] ?? ''?>"
            placeholder="Imagem"
            >

            <input
            type="text"
            name="categoria"
            id="category"
            value="<?=$register['categoria'] ?? ''?>"
            placeholder="Categoria"
            >

            <div class="button-div">
                <button type="reset"> Cancelar </button>
                <button type="submit"> Enviar </button>
            </div>
        </form>
    </div>
    <hr><hr>
    <table>
        <thead>
            <th> ID </th>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Valor </th>
            <th> Imagem </th>
            <th> Categoria </th>
            <th> Ações </th>
        </thead>
        <tbody>
        <?php
            $data = readData('dados.json');
            foreach($data as $id => $item){
        ?>

        <tr>
            <td><?=$id?></td>
            <td><?=$item['nome']?></td>
            <td><?=$item['descricao']?></td>
            <td><?=$item['valor']?></td>
            <td><?=$item['imagem']?></td>
            <td><?=$item['categoria']?></td>
            <td>
                <a href="index.php?id=<?=$id?>"> Editar </a>
                <a href="apagar.php?id=<?=$id?>"> Excluir </a>
            </td>
        </tr>

        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>