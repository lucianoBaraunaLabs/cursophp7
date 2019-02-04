<?php

function ola(){
	$argumentos = func_get_args(); // Pegando todos os argumentos da função
	return $argumentos;
}

var_dump(ola("Bom dia", 10));

?>