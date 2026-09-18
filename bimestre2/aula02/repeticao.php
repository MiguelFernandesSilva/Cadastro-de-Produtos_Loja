<?php
echo"<h1> Repetições em PHP </h1>";
echo"<h2> While (Enquanto) </h2>";

$contador = 0;

while ($contador < 50) {
    echo "Contador é: $contador";
    $contador++;
}

echo "<h2> For (para) </h2>";
for($i = 0; $i < 10; $i++){-
    echo"Indice é: $i";
}

echo "<h3> Tabuada </h3>";
$numero = $_GET['n'] ?? 2; // Ternário
for($i = $numero; $i <= 10; $i++){
    echo"<p> Tabuada do $numero </p>";
    for($j = 0; $j <= 10; $j++){
        echo"$i X $j = "; //EX.: 2 * 1
        echo($i * $j); // Multiplicação Ex.: 2
        echo"<br>"; // Quebrar linha
    }
    $numero++;
}
?>