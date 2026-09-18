<?php
echo "<h1> Variáveis </h1>";
echo "<div> 
    Nome de <strong>variáveis </strong><br>
    Não iniciar com <strong>números </strong><br>
    Não pode usar <strong>caractéres especiais </strong><br>
    Pode ser iniciado com underline (_) <br>
    Todas as variáveis iniciam com sifrão ($) <br>

    \$nome_variavel = 'valor da variável';                               
</div>";

echo "<h1> Operadores Aritméticos </h1>";
echo "<div>
    Adição (+) |
    Subtração (-) |
    Multiplicação (*) |
    Divisão (/) |
    Resto da divisão (%) |
    Potenciação (**) Ex.: n1**n2
</div>";

echo "<h1> Operadores de Atribuição </h1>";
echo "<div>
    Igual é (==) <br>
    Atribuir valor (=) <br>
    Comparar valor e tipo (===) <br>
    Maior que (>) <br>
    Menor que (<) <br>
    Maior ou igual (>=) e menor ou igual (<=) <br>
    Decremento (--) <br>
    Incremento (++) <br>
</div>";

echo "<h1> Operadores Lógicos </h1>";
echo "<div>
    E (AND) (&&) = Será verdadeiro se duas expressões são verdade. <br>
    OU (OR) (||) = Será verdadeiro se uma das expressões for verdade. <br>
    NÃO (!) || NÃO É IGUAL (!=) = Ao contrário <br>
</div>";

echo "<h1> Concatenação </h1>";
    $var1 = "Texto Início";
    $var2 = "Texto fim";
echo "<div>
    Concaternar <br>
</div>";

echo '<h2>'.$var1.' '.$var2.'</h2';
?>