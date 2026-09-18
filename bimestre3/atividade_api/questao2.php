<?php

$url = "https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL";

// 1. Faz a requisição GET e guarda a resposta (que vem em formato JSON)
$respostaJson = file_get_contents($url);

// 2. Transforma a string JSON em um Array Associativo do PHP
$dados = json_decode($respostaJson, true);

echo "Valor do dolar: " . $dados['USDBRL']['bid'];

?>