<?php

require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Luciano Baraúna');
$cad->setEmail('luluteste@teste.com');
$cad->setSenha('123456');

echo $cad;
$cad->registarVenda();

?>