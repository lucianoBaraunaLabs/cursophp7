
Uma variável para ser criada deve sempre começar com `$` antes do nome.

Exemplo:
```
$nome = "Olá sou goku" // declarando uma variável

echo $nome // utilizando ela

```

`var_dump()` - Mostra o tamanho de espaço, tipo e valor da variável.

Exemplo:
```
var_dump($nome) // - string(4) "Goku"
```

O nomes de variáveis em PHP não deve começar com número logo depois do `$` e o único
caracter especial válido é o `_`.

## Tipos de comentário
```
// Isso é um comentário de linha

/* 
    Isso é comentário de bloco
*/
```

### unset()
Limpa a variável. Você pode passar também vários argumentos para limpar múltiplas
variáveis.

```
$anoNascimento = 1988;
$nome = 'GOku';
$cidade = 'Palet';

echo $anoNascimento;
echo '<br/>';
unset($anoNascimento);
echo $anoNascimento; // aqui a variável não existe mais.


unset($nome, $cidade); // limpando duas variáveis aqui. 
```

### isset()
O comando checa se a variável existe ou não.
```
$nome =  'Goku';

// Se nome existir mostra o nome
if (isset($nome)) {
    echo $nome1
}
```

### exit
Para o código PHP até o ponto onde ele foi declarado.
```
codigo aqui....

exit; // para nessa linha

continuação do código...

```

### Concatenação
Para realizarmos a concatenação é preciso utilizar o `.`.
```
$nome = 'Son';
$sobrenome = 'Goku';

echo $nome . $sobrenome //SonGoku

echo $nome . " " . $sobrenome // Song Goku
```

### Tipos de dados no PHP

#### Tipos simples
1. String
2. Number
3. Ponto Flutuante
4. Booleano

#### Tipos Compostos
1. Array
2. Objeto

#### Tipos Especiais
1. Resource
2. Null


### Variáveis super globais

#### $_GET["foo"]
È um array que retorna o valor do parâmetro passado em `foo` na url. Esse valor sempre é retornado como string.
Para converter o valor por exemplo em inteiro basta colocar antes do resultado `(int)`

```
$valor = $_GET["a"]; // http://localhost/cursophp7/ex-code/variaveis/exemplo-04.php?a=xuxa

var_dump($valor) // string(4) "xuxa"

$valor = (int)$_GET["valor"]; // http://localhost/cursophp7/ex-code/variaveis/exemplo-04.php?valor=1234

var_dump($valor) // number(4) "1234"


```

