<?php
    // Checa se existe esse cookie
    if (isset($_COOKIE['NOME_DO_COOKIE'])) {
        $obj = json_decode($_COOKIE['NOME_DO_COOKIE']);
        var_dump($_COOKIE);
        echo $obj->empresa;
    }

?>
