<?php
    include_once "salvar.php";

    $id = $_GET['id'] ?? '';

    if($id != ''){
        $data = readData("dados.json");

        if(isset($data[$id])){
            unset($data[$id]);
            $data = array_values($data);
            file_put_contents("dados.json", json_encode($data));
        }
    }

    header("location: index.php");
?>