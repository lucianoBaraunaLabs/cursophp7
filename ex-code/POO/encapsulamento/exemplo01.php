<?php

class Pessoa {
    public $nome = 'Rasmus Lerdorf'; 
    protected $idade = 48;
    private $senha = '123456'; 

    public function verDados()
    {
        echo $this->nome . '<br/>';
        echo $this->idade . '<br/>';
        echo $this->senha . '<br/>';
    }
}


class Programador extends Pessoa // Class programador extende de pessoa
{
    // Ver dados funciona pq é um método público que vem de pessoa. 
    // Caso ele não esteja dentro

    public function verDados()
    // Agora como temos ver dados aqui dentro o único valor que não será mostrado
    // vai ser senha.
    {
        echo get_class($this); // estamos vendo de qual class vem esse método.
        echo $this->nome . '<br/>';
        echo $this->idade . '<br/>';
        echo $this->senha . '<br/>';
    }
}


// $objeto = new Pessoa();
$objeto = new Programador();

// echo $objeto->nome; 
// echo $objeto->idade; não temos acesso
echo $objeto->verDados() // conseguimos ver todos os valores



?>