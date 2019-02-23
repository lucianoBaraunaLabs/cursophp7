# Polimorfismo

É quando temos métodos com o mesmo nome em classes herdadas mas que possuem
comportamentos diferentes.

Podemos ter acesso aos métodos da classe que está sendo extendida através da
palavra reservada `parent` e  mesmo dentro de um método polimorfico.

Ex:
```
class Passaro extends Animal {
	public function falar(){
		return "Canta";
	}
	public function mover(){
        // Parent pega métodos do pai para serem utilizados.
		return "Voa e " . parent::mover();
	}
}
```