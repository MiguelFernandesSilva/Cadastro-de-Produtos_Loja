<?php
    function lerDados(String $arquivo):array {
        $dados = [];
        if(file_exists($arquivo)){
            $extrair_dados = file_get_contents($arquivo);
            $dados = json_decode($extrair_dados, true);
        }
        return $dados;
    }

    function salvarDados(array $novoContato):bool {
        $dados = lerDados("dados.json");
        $dados[] = $novoContato;
        $verifica = file_put_contents("dados.json", json_encode($dados));
        return $verifica;
    }
?>