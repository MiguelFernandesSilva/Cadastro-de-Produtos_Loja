<?php

$cnpj = $_GET['cnpj'] ?? "00000000000191"; 
$url = "https://brasilapi.com.br/api/cnpj/v1/$cnpj";

$respostaJson = file_get_contents($url);

$dados = json_decode($respostaJson, true);

echo "Razão Social: " . $dados['razao_social'] . "<br>";
echo "Nome Fantasia: " . $dados['nome_fantasia'] . "<br>";
echo "Cidade/UF: " . $dados['localidade'] . " - " . $dados['uf'] . "<br>";

?>