<?php

$url = "https://brasilapi.com.br/api/feriados/v1/2026";

$respostaJson = file_get_contents($url);

$dados = json_decode($respostaJson, true);

foreach($dados as $holiday){
    echo "<ul>";
    echo "<li> Data".$holiday['date']."</li>";
    echo "<li> Nome".$holiday['name']."</li>";
    echo "</ul> <br>";
};

?>