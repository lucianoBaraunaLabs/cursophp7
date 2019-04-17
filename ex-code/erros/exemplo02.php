<?php


   error_reporting(E_ALL & ~E_NOTICE); // Configura o php para mostrar erros, sem avisos.

   $nome = $_GET["nome"];

   echo $nome;
?>