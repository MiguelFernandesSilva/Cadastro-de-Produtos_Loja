<?php
echo "<h1> Array para json</h1>";
$dados = [];
$dados[0] = [
    "nome" => "Jonh",
    "sobrenome" => "Smith",
    "idade" => 30,
    "email" => "jonh@email.com",
    "hobbies" => ["futebol", "cinema", "cozinhar"],
    "endereco" => [
        "rua" => "Rua Gonçalo de Carvalho ",
        "numero" => 256,
        "bairro" => "centro",
        "cidade" => "Porto Alegre",
        "estado" => "RS",
        "cep" => "90035-170"
    ]
];
$dados[1] = [
    "nome" => "Mary",
    "sobrenome" => "Jane",
    "idade" => 25,
    "email" => "mary@email.com",
    "hobbies" => ["atletismo", "series", "caminhar"],
    "endereco" => [
        "rua" => "Rua do Bom Jesus",
        "numero" => 456,
        "bairro" => "cnentro",
        "cidade" => "Recife",
        "estado" => "PE",
        "cep" => "50050-000"
    ]
];
$dados[2] = [
    "nome" => "Peter",
    "sobrenome" => "Parker",
    "idade" => 20,
    "email" => "peter@email.com",
    "hobbies" => ["fotografia", "balet"],
    "endereco" => [
        "rua" => "Rua dos Andradas",
        "numero" => 789,
        "bairro" => "Centro",
        "cidade" => "Recife",
        "estado" => "PE",
        "cep" => "50050-000"
    ]
];

echo "<hr>";
echo $dados[0]['hobbies'][0];
echo $dados[2]['endereco']['rua'];
echo "<pre>";
print_r($dados);
echo "<hr>";

echo json_encode($dados);

$arquivo = "dados.json";
file_put_contents($arquivo, json_encode($dados));