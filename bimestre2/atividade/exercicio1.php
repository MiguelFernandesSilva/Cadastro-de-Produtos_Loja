<?php
    $inicio = $_GET['inicio'] ?? 10;

    while ($inicio > -1){
        echo $inicio--.'<br>';
    }
    echo "Fim.";
?>