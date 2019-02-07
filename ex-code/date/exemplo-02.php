<?php

$ts = strtotime("2001-09-11"); // Converte a string em timestamp
echo $ts;

echo "<br>";

echo date("l, d/m/Y", $ts); // Mostrando o dia da semana a data no formato em cima do timestamp passado

?>