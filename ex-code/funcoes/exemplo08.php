<?php


// Esse é um recurso novo no php7
// Podemos forçar o tipo do retorno colocando `:` e o tipo de valor após os `()`

function soma(int ...$valores):string {
    // Todos os parâmetros devem ser integer, somamos todos os valores
    // e retornamos o resultado como string.
    
    return array_sum($valores);
}

echo soma(2, 2);
echo '<br>';
echo soma(25, 33, 100, 50, 1500);
echo '<br>';
echo soma(1.5, 3.2);
echo '<br>';

?>