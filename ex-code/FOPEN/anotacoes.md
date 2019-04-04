# Manipulando arquivos 

### fopen
Dá a capacidade de abrir um arquivo mesmo ele não existindo.

o primeiro argumento é o caminho do arquivo e o segundo são as opções que podem ser econtradas na documentação.
```
fopen('log.txt', 'w+'); // abrindo um arquivo inexistente
```

### fwrite
Como o nome já diz escreve um arquivo

### fclose
fecha o arquivo

```
<?php
  
   $file =  fopen('log.txt', 'w+'); // abrindo um arquivo inexistente
   fwrite($file, date('Y-m-d H:i:s')); // escrevendo um arquivo
   fclose($file); // fecha o arquivo
   echo 'Arquivo criado com sucesso';
?>
```
