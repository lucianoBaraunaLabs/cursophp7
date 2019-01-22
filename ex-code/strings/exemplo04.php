<?php

$frase = 'LOrem minha senhora mãe lorem é tudo.';

$palavra = 'mãe';

$q = strpos($frase, $palavra);
var_dump($q); //int(20) 

echo '<br>';
$texto = substr($frase, 0, $q);

var_dump($texto); // string(20) "LOrem minha senhora " 

echo '<br>';

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2); // string(15) " lorem é tudo."



?>

