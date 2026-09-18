<?php
$numero = 0;

if($numero > 0){
    echo "Número positivo. <br><br>";
} else if ($numero == 0) {
    echo "O número é igual a zero. <br><br>";
} else if ($numero === 0) {
    echo "Número é identico a zero. <br><br>";
} else {
    echo "O número é negativo. <br><br>";
}

$opcao = $_GET['dia'];
switch($opcao){
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>