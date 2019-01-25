# Array

### `print_r()`
Função que serve para debugar o array na tela.
```
$frutas = array('laranja', 'abacaxi', 'banana');
print_r($frutas); // mostra o array
```


### `end()`
Mostra o último item de um array
```
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco sport";

print_r($carros);
echo end($carros[1]); // "Eco sport"
```

### `array_push()`
Adiciona itens ao `array`

```
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

print_r($pessoas[0]["nome"]); // João
```