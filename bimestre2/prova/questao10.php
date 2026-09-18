<?php
    $altura = $_GET['altura'];
    $idade = $_GET['idade'];
    $autorizacao = $_GET['autorizacao'];

    if ($idade >= 18) {
        $ingresso = 'VIP';
    } else if ($idade < 18 && $idade > 12){
        $ingresso = 'ESTUDANTE';
    } else if ($idade == 12) {
        $ingresso = 'ISENTO';
    }

    if ($altura < 1.40 || $idade < 12 || $autorizacao === false) {
        echo "Por motivos de segurança você não está autorizado a entrar!";
    } else {
        echo "Você tem ".$idade." anos e ".$altura."m de altura, seu ingresso é ".$ingresso.".";
    }
?>