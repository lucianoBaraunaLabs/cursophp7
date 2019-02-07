<?php

class Pessoa {
    
    public $nome;

    public function falar() {
        return "O meu nome é ".$this->nome; // para acessar os atributos aqui não usamos $.
    }

};

$luciano = new Pessoa(); // Instanciando uma class
$luciano->nome = "Luciano Baraúna"; // Atribuindo valores aos atributos da class
echo var_dump($luciano);
echo $luciano->falar(); // Chamando métodos da class


?>