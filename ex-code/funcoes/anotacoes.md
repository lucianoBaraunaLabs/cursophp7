# Funções

### Declarando funções
Para declarar funções no PHP é preciso fazer da seguinte forma:

```
<?php

function ola(){
	return "Olá mundo! <br/>";
}

echo ola();

$frase = ola();

echo strlen($frase);

?>
```

### Parâmetros default
Podemos atribuir valores padrões nos parâmetros da função.

```
<?php

function ola($texto = "Mundo", $periodo = "Bom dia"){ // quando passamos os parâmetros assim estamos colocando valores padrões 
	return "Olá $texto! $periodo! <br/>";
}

echo ola("Mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");
?>
```

Para pegar todos os argumentos de uma função podemos utilizar a função `func_get_args()`

### Parâmetros por referência.
Usando o & antes de uma parâmetro de função nós conseguimos deixar ele global. Cada alteração que esse valor sofrer dentro da função será refletido
globalmente.

```
<?php
$a = 10;
function trocaValor(&$b){ 
	$b += 50;
	return $b;
}
echo $a; => 10
echo trocaValor($a); => 60
echo "<br/>";
echo trocaValor($a); => 110
echo "<br/>";
echo $a; => 110
?>

```
Podemos também acessar esse valor dentro por exemplo de um foreach

```
<?php

$pessoa = array(
    'nome' => "Luciano",
    'idade' => 30
);

foreach ($pessoa as &$value) {
    
    if(gettype($value) === 'integer') $value += 10;

    echo $value.'<br>';
}

print_r($pessoa);
var_dump($pessoa);

?>
```

### Definindo tipos de argumentos e infinitos argumentos.
Esse é um recurso novo no php7. 

Conseguimos agora dizer o tipo dos parâmetros que devem ser passados colocando antes dos argumento o tipo. Fazendo dessa forma o PHP forção também a conversão desse tipos. 

Ex: se numa função que estipulada somente inteiros e nós passarmos um valor flutuante a saída será inteira.


Para estiplular um número de inifinitos argumentos basta colocar o seguinte operador na função `...`. Já utilizando dessa forma os argumentos ficam disponíveis como `array` dentro da função.

```
<?php


function soma(int ...$valores) {
    // Todos os parâmetros devem ser integer.
    return array_sum($valores); // Soma de todos os valores
}

echo soma(2, 2);
echo '<br>';
echo soma(25, 33, 100, 50, 1500);
echo '<br>';
// Como o valor deve ser um inteiro o PHP faz a conversão de tipo para integer.
echo soma(1.5, 3.2); // => ou seja o resultado aqui é : 4 
echo '<br>';

?>
```

### Definindo tipo de retorno
Esse é um recurso novo no php7. 

Podemos forçar o tipo do retorno colocando `:` e o tipo de valor após os `()`

```
<?php

function soma(int ...$valores):string {
     // Todos os parâmetros devem ser integer.
    return array_sum($valores); // Soma de todos os valores
}

// Retorno como string
echo soma(2, 2);
echo '<br>';
echo soma(25, 33, 100, 50, 1500);
echo '<br>';
echo soma(1.5, 3.2);
echo '<br>';

?>
```

### Declarando callbacks

```
<?php

function test($callback)
{
    // Processo lento
    $callback();
}

test(function() {
    echo "Terminou!";
})



$fn = function($a){
    var_dump($a);
};

echo $fn("Oi");

?>
```