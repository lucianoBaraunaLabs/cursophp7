<?php

// TIPOS SIMPLES

// String
$nome = "Goku";
$site = 'www.google.com';

// Number
$ano = 1988;

// Ponto flutuante
$salario = 1000.99;

// Booleano
$bloqueado = false;

// Tipos compostos

// Array
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

// Objeto
$nascimento = new DateTime();
var_dump($nascimento);


// Tipos especias

// Resource
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);


// Null
$nulo = NULL;



?>


