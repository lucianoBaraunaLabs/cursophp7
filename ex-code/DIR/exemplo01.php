<?php
    $name = "images";

    if(!is_dir($name)){ // checa se o diretório existe
        
        mkdir($name); // Cria o diretório
        echo "Diretório $name criado com sucesso!";

    } else {

        rmdir($name); // remove o diretório
        echo "Já existe o diretório: $name foi removido";

    }
?>