# Autoload

Existe uma função mágica no PHP chamada `__autoload`. Ela é responsável pelo carregamento 
da `class` sem ter a necissidade de efetuar o require. Agora nós temos acesso quando instaciarmos a `class` usando `new` mas desde que o nome do arquivo seja o mesmo da `class`.

O ideal é que esse código fique no seu arquivo de configuração do PHP.

Abaixo declaramos a função e passamos o argumento como nome da classe para
`require_once`. A classe será carregada desde que esteja no mesmo diretório.

```
function __autoload($nomeClasse) {
    require_once("$nomeClasse.php");
}
```

## Quando temos a classe em algum diretório diferente.
Para resolver esse problema utilizamos `spl_autoload_register` que ajuda a registrar
mais de uma função de autoload. São funções nativas do PHP para facilitar lacunas
no PHP.

Essa função aceita uma `string` desde que seja o nome da função que realizará o 
carregamento das `class` ou ela aceita um callback.

Aqui temos a função que checa se existe o arquivo e realiza o carregamento.
```
function incluirClasses($nomeClasse) {
    if (file_exists($nomeClasse.'.php') === true) {
        require_once($nomeClasse.'.php');
    }
}

spl_autoload_register('incluirClasses');
```

Caso tenhamos um diretório essa função mudaria um pouco. Aqui estamos checando
se a class existe no diretório `abstratas`.
```
spl_autoload_register(function($nomeClasse){
    if (file_exists('abstratas'. DIRECTORY_SEPARATOR . $nomeClasse . '.php') === true) {
        require_once('abstratas'. DIRECTORY_SEPARATOR . $nomeClasse.'.php');
    }
});
```