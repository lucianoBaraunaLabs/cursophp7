<?php 


interface Veiculo {

    public function acelerar($velocidade);
    public function fernar($velocidade);
    public function trocarMarcha($velocidade);
}

class Civic implements Veiculo
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

$carro = new Civic();
$carro->acelerar('500');
echo '<br />';
$carro->fernar('600');
echo '<br />';
$carro->trocarMarcha('10');


?>