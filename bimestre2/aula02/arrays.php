<?php
    echo"<h1> Arays em PHP </h1>";
    echo"<h2> Arrays com Índices </h2>";
    // Lista indexada (com índices)
    //           [0]     [1]     [2]       [3]    [4]
    $carros = ['Pálio', 'Uno', 'Celta', 'Corsa', 'Gol'];
    echo $carros[4]; // Gol
    echo"<pre>";

    /*
    echo"</pre>";
    print_r($carros);
    echo"</pre>";
    var_dump($carros);
    */

    foreach($carros as $c => $i){
        echo"Carro: $i: $c <br>";
    }
    for($i = 0; $i < count($carros); $i++){
        echo "Carro ".$carros[$i]."<br>";
    }

    $carros[] = "Fusca";
    echo"<pre>";
    print_r($carros);
    echo"</pre>";
    echo"<hr>";
    echo "<h2> Arrays Associativos (Objetos) </h2>";
    echo "<div> Pares de chave => valor </div>";
    $linguagens = [
        'frontend' => 'Javascript',
        'backend' => 'PHP',
        'dados' => 'Python',
        'marcacao' => 'HTML'
    ];
    echo $linguagens['marcacao'];
    echo $linguagens['frontend'];
    foreach($linguagens as $chave => $valor) {
        echo $chave.': '.$valor.'<br>';
    }
?>