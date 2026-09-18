<?php
    include_once "funcoes.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        if($nome == ''){
            header("location: index.php?msg=Nome é obrigatório");
            exit;
        }
    }
    $novoContato = [
        "nome" => $nome,
        "email" => $email,
        "telefone" => $telefone
    ];
    $salvou = salvarDados($novoContato);
    if($salvou){
        header("location: index.php?msg=Cadastrado com sucesso!");
    } else {
        header("location: index.php?msg=Erro ao cadastrar!");
    }
?>