<?php

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        return $this->numero = $n;
    }
    
}

class CPF extends Documento
{
    public function validar():bool // retorna sempre um booleano
    {
        $numeroCPF = $this->getNumero();

        // Validação do CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero('999.999.999-00');
var_dump($doc->validar());

echo '<br/>';
echo $doc->getNumero();

?>