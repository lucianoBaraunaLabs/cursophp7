<?php
class Carro {
		private $modelo;
		private $motor;
    private $ano;
    
    // Por convensão sempre quando escrevemos get e set devemos iniciar com essas palavras na função e escrevendo elas em minúsculo
	public function getModelo(){ 
		return $this->modelo;
    }
    
	public function setModelo($modelo){
		$this->modelo = $modelo; // Setando o argumento modelo no atributo privado modelo
    }
    
	public function getMotor():float{ // mesmo passando o valor sendo uma string ele é retornado um float
		return $this->motor;
    }
    
	public function setMotor($motor){
		$this->motor = $motor;
    }
    
	public function getAno():int{ // mesmo passando o valor sendo uma string ele é retornado um inteiro
		return $this->ano;
    }
    
	public function setAno($ano){
		$this->ano = $ano;
    }
    
	public function exibir(){
		return [
			"modelo" => $this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		];
	}
}
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");
var_dump($gol->exibir());
echo $gol->exibir()["modelo"];
?>