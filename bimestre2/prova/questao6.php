<?php
    $lista = [12, 55, 81, 9, 15, 17, 19, 32, 54, 105, 24, 21, 40];

    for ($i = 0; $i < count($lista); $i++){
        if ($lista[$i] % 5 == 0){
            echo "Nº $lista[$i]<br>";
        };
    };
?>