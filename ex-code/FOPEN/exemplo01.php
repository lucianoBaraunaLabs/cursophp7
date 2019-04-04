<?php
    // fopen o primeiro é o caminho do arquivo e o segundo são as opções
   $file =  fopen('log.txt', 'w+'); // abrindo um arquivo inexistente
   
//    fwrite($file, date('Y-m-d H:i:s')); // escrevendo um arquivo
   fwrite($file, date('Y-m-d H:i:s')); // escrevendo um arquivo
   
   fclose($file); // fecha o arquivo
   
   echo 'Arquivo criado com sucesso';
?>