<?php
    // Criando um arquivo CSV.
    require_once('config.php');

    $sql =  new Sql();

    $usuarios = $sql->select('SELECT * FROM tb_usuarios ORDER BY deslogin');

    $headers = array();

    // Pegando o nome das colunas
    foreach ($usuarios[0] as $key => $value) {
        array_push($headers, ucfirst($key));
    }

    // Criando um arquivo em branco
    $file =  fopen('usuarios.csv', 'w+');
    
    // Escrevendo no arquivo as colunas, colocando nas linhas e quebrando.
    fwrite($file, implode(',', $headers) . "\r\n");

    foreach ($usuarios as $row) {
        // Varrendo as linhas
        $data = array();
        
        //  Colocando os dados nas colunas
        foreach ($row as $key => $value) {
            array_push($data, $value);
        } // fim do foreach de coluna

        // Escrevendo no aquivo as linhas.
        fwrite($file, implode(',', $data) . "\r\n");
    }// fim do foreach de linha

    fclose($file);
   
?>