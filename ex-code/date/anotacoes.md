# Datas e setLocale

A função date possui diversos formatos que são reproduzidos de acordo com o formato do argumento passado

```
<?php
echo date("d/m/Y - H:i:s"); // 01/01/0000 01:05:00 

echo "<br>";

echo time();

?>
```
### time()
Com time conseguimos pegar o timestamp

### strtotime()
Converte a string em timestamp

```
$ts = strtotime("2001-09-11"); // Converte a string em timestamp
echo $ts;

echo "<br>";

echo date("l, d/m/Y", $ts); // Mostrando o dia da semana a data no formato em cima do timestamp passado
```

## setLocale()

A função altera a linguagem local. É uma boa prática além de deixar seu sistema crossplataforma colocar os padrões `unix`, `utf8` e `windows` de configuração de linguagem.

A constante `LC_ALL` é uma constante que altera o padrão de liguagem.

No exemplo abaixo estamos setando toda a linguagem para português e por conta disso formatamos o valor de `strftime`

```
<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B"); // terça fevereiro

?>

```

O mais indicado é usar a class DateTime por quê com ela mantemos nosso código mais fácil para o entendimento, desenvolvimento e orientado.

```
<?php

$dt = new DateTime();

var_dump($dt);

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); // Para acessar um método de uma class deve se usar ->

?>
```

### Exemplo adicionando 15 dias a data

```
<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); // Para acessar um método de uma class deve se usar ->

?>
```