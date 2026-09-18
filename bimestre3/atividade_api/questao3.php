<?php

$url = "https://dog.ceo/api/breeds/image/random";

$respostaJson = file_get_contents($url);

$dados = json_decode($respostaJson, true);

echo "<img src=".$dados['message'].">";

?>