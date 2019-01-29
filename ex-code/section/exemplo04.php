<?php

require_once ("./config.php");

session_regenerate_id(); // Renegerando um id de sessão 

echo session_id(); // Renegerando um id de sessão 

echo "<br>";

var_dump($_SESSION)
?>