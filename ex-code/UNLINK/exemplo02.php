<?php
    // Excluindo todos os arquivos dentro de um diretório.
    if (!is_dir("images")) mkdir("images");

    foreach (scandir("images") as $item) {	

        if(!in_array($item, array(".", ".."))) {
        
            unlink("images/".$item);
        }

    }
   
?>