# Strings

Para interpolar variáveis no PHP é preciso utilizar aspas duplas.

```
$nome = 'Goku';

echo 'Olá eu sou o $nome - sem interpolação';

echo '<br>';

echo "Olá eu sou o $nome";

```

### Métodos de string

```

$nome = 'goku';

echo strtoupper($nome);

echo '<br>';

echo strtolower($nome);

echo '<br>';

echo ucfirst($nome); // somente a primeira fica maiúscula

echo '<br>';

echo ucwords($nome); // somente a primeira fica maiúscula

```

#### str_replace('a', '0', $foo)
Trocar um valor por outro. O primeiro argumento é o que deseja trocar, segundo é
o valor que vai ficar e o terceiro é o valor.

```
$nome = 'Luciano';

$valor = str_replace('a', '0', $nome);

echo $valor.'<br>'; // Luci0no

echo str_replace('u', '###', $valor); // L###ci0no

```

#### strpos($frase, $palavra)
Pega a posição da string.
$q = strpos($frase, $palavra); // pega a posição da string
var_dump($q);

#### substr()
Retorna parte de uma string

echo '<br>';
$texto = substr($frase, 0, $q); // retorna parte de uma string

```
$frase = 'LOrem minha senhora mãe lorem é tudo.';

$palavra = 'mãe';

$q = strpos($frase, $palavra);
var_dump($q); //int(20) 

echo '<br>';
$texto = substr($frase, 0, $q);

var_dump($texto); // string(20) "LOrem minha senhora " 

echo '<br>';

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2); // string(15) " lorem é tudo."
```