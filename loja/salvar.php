<?php
    function readData(String $file):array {
        $data = [];
        if(file_exists($file)){
            $extract_data = file_get_contents($file);
            $data = json_decode($extract_data, true);
            if(!is_array($data)){
                $data = [];
            }
        }
        return $data;
    }

    function saveData(array $newContact, $id = ''):bool {
        $data = readData("dados.json");

        if($id == ''){
            $data[] = $newContact;
        } else {
            $data[$id] = $newContact;
        }

        $verify = file_put_contents("dados.json", json_encode($data));
        return $verify;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'] ?? '';
        $name = $_POST['nome'] ?? '';
        $description = $_POST['descricao'] ?? '';
        $value = $_POST['valor'] ?? '';
        $image = $_POST['imagem'] ?? '';
        $category = $_POST['categoria'] ?? '';

        if($name == '' || $value == ''){
            header("location: index.php?msg=Informe o nome e o valor do produto!");
            exit;
        }

        $newContact = [
            "nome" => $name,
            "descricao" => $description,
            "valor" => $value,
            "imagem" => $image,
            "categoria" => $category
        ];

        $saved = saveData($newContact, $id);

        if($saved){
            header('location: index.php?msg=Produto Cadastrado!');
        } else {
            header('location: index.php?msg=Ocorreu um Erro! Tente Novamente!');
        }
    }
?>