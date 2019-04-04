<?php
    $images = scandir('images'); // retorna informações sobre o diretório.
    $data = array();
    
    foreach ($images as $img) {
        // Se ele o valor diferente de . e ..
        if(!in_array($img, array('.', '..'))){ 
            
            $filename = 'images' . DIRECTORY_SEPARATOR . $img;
            $info =  pathinfo($filename); // retorna informação sobre o arquivo

            $info['size'] = filesize($filename); // pega o tamanho do arquivo
            $info['modified'] = date('d/m/Y H:i:s', filemtime($filename)); // pega a hora de última modificação do arquivo.
            $info['url'] = 'http://localhost/cursophp7/ex-code/DIR/'.str_replace('\\', '/', $filename);
            
            array_push($data, $info);
            
        }
    }

    echo json_encode($data);
?>