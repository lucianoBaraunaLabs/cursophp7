<?php


function soma(int ...$valores) {
    // Todos os parâmetros devem ser integer e somamos todos os valores.
    return array_sum($valores);
}

echo soma(2, 2);
echo '<br>';
echo soma(25, 33, 100, 50, 1500);
echo '<br>';
// Como o valor deve ser um inteiro o PHP faz a conversão de tipo para integer.
echo soma(1.5, 3.2); // => ou seja o resultado aqui é : 4 
echo '<br>';

?>