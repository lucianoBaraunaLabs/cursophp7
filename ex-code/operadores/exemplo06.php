<?php

// Operador Null Coalescing

$a = NULL;
$b = NULL;
$c = 50;

echo $a ?? $b ?? $c; // se (a) e (b) forem null mostra c


$d = NULL;
$e = 150;
$f = 50;

echo $d ?? $e ?? $f; // se (d) é null e quando chega em (e) ele para a checagem por quê encontra um valor