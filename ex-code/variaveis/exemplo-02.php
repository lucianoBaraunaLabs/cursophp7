<?php

$anoNascimento = 1988;

$exemplo1comnumero = 1887;

$exemplo_caracter_especial = '1589798';

// Isso é um comentário de linha

/* 
    Isso é comentário de bloco
*/

echo $anoNascimento;
echo '<br/>';
unset($anoNascimento);
echo $anoNascimento;


if (isset($nome)) {
    echo $nome;
}

// exit; // para o código php aqui

$nome = 'Son';
$sobrenome = 'Goku';

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;


?>