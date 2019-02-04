<?php

$a = 10;
function trocaValor(&$b){ 
	// Usando o & antes de uma parâmetro de função nós conseguimos deixar ele
	// global. Cada alteração que esse valor sofrer dentro da função será refletido
	// globalmente. O termo disso é passagem de parâmetro por referência
	$b += 50;
	return $b;
}

echo $a;
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;
?>