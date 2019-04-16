<?php
    $link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

    $content = file_get_contents($link); 
    // var_dump($content);
    
    $parse = parse_url($link); // monta um json com dados do arquivo.
    echo '<p>$parse</p>';
    var_dump($parse);

    $basename = basename($parse["path"]); //pega o caminho base do arquivo.
    echo '<p>$basename</p>';
    var_dump($basename);

    $file = fopen($basename, "w+"); // criando e abrindo um arquivo
    
    fwrite($file, $content); // escrevendo o conteúdo nele.

    fclose($file); // fechando o arquivo.

?>
<p>
    <img src="<?=$basename?>" alt="">
</p>
