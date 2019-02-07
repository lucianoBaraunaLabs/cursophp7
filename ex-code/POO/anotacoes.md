# OOP

Para criar uma class utilizamos a palavra reservada `class`.

### Criando atributos
Criamos atributos na class da mesma forma que fazemos ao declarar as variáveis. utilizando `$` antes do nome da variável.

### Deixando atributos e métodos públicos
Deixamos um atributo ou método público utilizando `public` antes da declaração.

### Acessando os valores
Conseguimos acessar os valores dos atributos dentro da classe usando a seguinte sintaxe `$this->foo`. E nesse caso ao acessar não precisamos colocar o `$` antes do nome da variável.

```
class Carro {
    public $modelo

    public function getModelo() {
        return $this->modelo;
    }
}

```

### Atribuindo valores e chamando métodos.
Após instanciarmos a class e caso quisermos ter acesso aos atributos e métodos precisamos fazer da seguinte maneira.

```
$luciano = new Pessoa();

$luciano->nome = "Luciano Baraúna"; // Atribuindo valores aos atributos da class

echo $luciano->falar(); // Chamando métodos da class
```

### Exemplo

```
<?php

class Pessoa {
    
    public $nome;

    public function falar() {
        return "O meu nome é ".$this->nome;
    }

};

$luciano = new Pessoa();

$luciano->nome = "Luciano Baraúna"; // Acessando o atributo.

echo var_dump($luciano);

echo $luciano->falar(); // Acessando o método.

?>

```

### Criando atributos privados
Para deixar privado atributos é preciso utilizar a palavra `private` antes de cada declaração. Ex:

```
class Foo {
    private $bar;
}
```

É interessante quando temos um atributo privado utilizar
um getter e setter para manipular o seu valor pq sem ele não temos acesso ao atributo quando instanciamos a class.

Por convensão devemos sempre iniciar o nome dos get e set em minúsculo. Ex:

```
public function getModelo(){ 
    return $this->modelo;
}

public function setModelo($modelo){
    $this->modelo = $modelo; // Setando o argumento modelo no atributo privado modelo
}
```

### Usando static

Os métodos estáticos foram feitos para serem utilizados sem precisar instanciar a class.

A palavra chave static ajuda a utilizar os métodos ou os atributos sem precisar instanciar o objeto.

Para criar um atributo ou método `static` basta colocar a palavra `static` antes do nome. Ex:

```
public static $valor;
public static function validarCPF($cpf):bool {
    ...
}

```
#### Utilizando static

Para utilizar é preciso escrever da seguinte forma, ex:

```
Documento::validarCPF()
```

```
$cpf = new Documento();
$cpf->setNumero("67912569669");

$cpf::$valor = "foo"; // Inserindo o valor no atributo static
var_dump(Documento::validarCPF("15489703625")); // Usando método stático

var_dump($cpf);
echo $cpf::$valor; // Acessando valor do atributo static
```

### __construtc
Quando iniciamos uma classe utilizamos o `__construct` para já atribuir valores aos atributos ou executar algum método.

No exemplo temos que quando a classe for iniciada passamos argumentos já para os atributos. Dessa forma eliminamos a necessidade de usar um método `set`.
```
class Endereco {
    private $logradouro;
    private $cidade;
    private $numero;

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->cidade = $b;
        $this->numero = $c;
    
    }
```

### __destruct
Esse método é executado quando destruímos uma classe. Por exemplo seria utilizado para quando uma conexão com um banco de dados fosse finalizada por exemplo ou um registro de log.
```
public function __destruct() {
     var_dump('DESTRUIR');
}
```

### __toString
Utilizado para serializar algum dado da class. Com essa método podemos utilizar o `echo` para debugar por conta do seu retorno ser em string.
```
public function __toString() {
    return $this->logradouro.', '.$this->numero.' - '.$this->cidade;
}
```