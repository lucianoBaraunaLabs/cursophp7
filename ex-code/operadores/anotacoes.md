# Operadores

### Operador de atribuição
```
$nome = "Goku";

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

$valorTotal *= .9;

echo $valorTotal;
```

### Operador de concatenação
```
echo $nome . " mais alguma coisa <br/>";

// Atribuição de valor concatenando
echo $nome .= " Super";

```

### Operador de aritiméticos
```
$a = 10;
$b = 2;

echo $a + $b;

echo "<br>";

echo $a - $b;

echo "<br>";

echo $a * $b;

echo "<br>";

echo $a / $b;

echo "<br>";

echo $a % $b;

echo "<br>";

echo $a ** $b;

echo "<br>";
```
###  Operador de comparação
```
$a = 55.0;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

echo "<br>";
```

### Operador nave espacial - spaceship
O operador spaceship retorna da seguinte forma:
- se $a < b ele retorna 1
- se $a = b ele retorna 0
- se $a > b ele retorna -1

```
$a = 30;

$b = 55;

var_dump($a <=> $b);
```
### Operador Null Coalescing
O operador Null Coalescing checa se o valor é null até encontrar um valor direfente
de null para ele ser exibido

```
$a = NULL;
$b = NULL;
$c = 50;

echo $a ?? $b ?? $c; // se (a) e (b) forem null mostra c


$d = NULL;
$e = 150;
$f = 50;

echo $a ?? $b ?? $c; // se (d) é null e quando chega em (e) ele para a checagem por quê encontra um valor
```
### Operadores de incremento
```
$a = 10;

echo $a++; // executando o código e incrementando o valor depois. 10

echo '<br>';

echo $a; // 11

echo '<br>';

echo --$a; // 10
```

