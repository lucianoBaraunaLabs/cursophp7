<?php
    $condicao = true;
    $contador = 0;

    while ($condicao) {
        $numero = rand(1, 10); #gera inteiro sortido de 1 a 10
        $contador += 1;

        if ($numero === 3) {
            echo 'TRÊS!!!!';
            $condicao = false;
            $contador -= 1;
        }
        echo $numero . " - ";
    }
    echo "<br>";
    echo 'Quantidade de números sorteados: ' . $contador;

?>