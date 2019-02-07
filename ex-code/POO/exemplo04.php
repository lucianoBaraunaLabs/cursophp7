<?php
class Endereco {
    private $logradouro;
    private $cidade;
    private $numero;

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->cidade = $b;
        $this->numero = $c;
    
    }

    public function __destruct() {
        // var_dump('DESTRUIR');
    }

    public function __toString() {
        return $this->logradouro.', '.$this->numero.' - '.$this->cidade;
    }
}

$meuEndereco = new Endereco('Rua lorem ipsum', 'Rio de Janeiro', 'RJ');

var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;


?>