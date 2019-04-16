# Upload de arquivo

Precisamos colocar o `enctype="multipart/form-data"` na tag `form` para 
conseguir enviar os arquivos de forma binaria.

Para esse caso precisamos utilizar o `$_FILES[foo]` para conseguir pegar o arquivo no tipo da requisição.

## Varíaveis globais que auxiliam no upload

### `$_SERVER` 
Guarda várias configurações sobre o servidor.
Ex: 
- `$_SERVER["REQUEST_METHOD"]` - guarda o tipo de requisição feita para servidor.

### `$_FILES["foo"]`

O Array pega informações sobre o arquivo. Por conta da quantidade de configurações é melhor olhar a documentação.


## move_uploaded_file($foo, $bar)
Move o arquivo de upload para um lugar de destino. Onde `$foo` é o aquivo e `$bar`
é o destino.