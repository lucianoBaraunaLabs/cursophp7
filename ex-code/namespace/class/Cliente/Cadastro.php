<?php

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

?>