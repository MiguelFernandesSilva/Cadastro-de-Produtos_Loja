<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 > 0) {
        echo "O número ".$numero1." é positivo. <br>";
    } else if ($numero1 < 0){
        echo "O número ".$numero1." é negativo <br>";
    } else {
        echo "O número ".$numero1." é igual a 0. <br>";
    };

    if ($numero2 > 0) {
        echo "O número ".$numero2." é positivo.";
    } else if ($numero2 < 0){
        echo "O número ".$numero2." é negativo";
    } else {
        echo "O número ".$numero2." é igual a 0.";
    };
?>