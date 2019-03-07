# Namespace

Junto da função `spl_autoload_register` o `namespace` deixa nosso código muito
mais organizado desde que esteja bem documentado para sistemas complexos.

Para definirmos um namespace usamos o seguinte comando `namespace Foo`.

Aqui estamos definino o namespace e dizendo ao PHP que existe uma class cadastro
na raiz e vamos herdar tudo que tem lá mas isso só é possível pq definimos o namespace


```
namespace Cliente;

class Cadastro extends \Cadastro
{
    private $nome;
    private $email;
    private $senha;

    public function registarVenda()
    {
        echo 'Foi registrada uma venda para o cliente  '. $this->getNome();
    }

}

```

E para usarmos o namespace basta utiliziar a paralavra `use`.
```
<?php

require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Luciano Baraúna');
$cad->setEmail('luluteste@teste.com');
$cad->setSenha('123456');

echo $cad;
$cad->registarVenda();

?>
```
