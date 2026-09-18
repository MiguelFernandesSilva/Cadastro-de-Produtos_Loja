<?php
    $numero = $_GET['numero'] ?? 5;
    $limite = $_GET['limite'] ?? 15;

    for ($i = 1; $i <= $limite; $i++) {
        echo"$numero vezes $i = ";
        echo($numero * $i);
        echo "<br>";
    }
?>