# Tratando erros de forma global
O php nós dá a possibilidade de criar um padrão de resposta para 
os nossos erros atrávez da função `set_error_handler($)`. 

A função recebe o nome da nossa função que sera utilizada para o tratamento do erro. Podemos com isso deixar essa configuração no nosso
arquivo `config.php`


```
    function error_handler($code, $message, $file, $line)
    {
        echo json_encode(array(
            'code' => $code,
            'message'=> $message,
            'file'=> $file,
            'line'=> $line
        ));
    }
    set_error_handler('error_handler');
```

## error_reporting(E_ALL & ~E_NOTICE); 

É uma função que configura o php para mostrar erros.
Abaixo estamos mostrarando todos os erros, sem avisos.

```
error_reporting(E_ALL & ~E_NOTICE)
```
