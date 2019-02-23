<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function fernar($velocidade);
    public function trocarMarcha($velocidade);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo 'O veiculo acelerou até ' . $velocidade . 'km/h';
    }

    public function fernar($velocidade)
    {
        echo 'O frenou até ' . $velocidade; 'km/h';
    }
    
    public function trocarMarcha($marca)
    {
        echo 'O veículo engatou a marcha  ' . $marca;
    }
}

class DelRey extends Automovel
{
    public function empurrar($valor)
    {

    }
}

$carro = new DelRey();

echo $carro->acelerar(200);

?>