<?php

require_once ("./config.php");

unset($_SESSION['nome']); // removendo a chave da sessão

echo $_SESSION['nome']; 

?>