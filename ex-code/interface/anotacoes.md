# Interface

Interface são muito recomendas para criamos uma forma de padrão a ser seguido no código.

Nela podemos definir os métodos que uma classa deve ter e seus tipos.

Para criar uma interface é preciso utilizar a seguinte sintaxe.
```
interface Foo {
    ...código aqui
}
```
E dentro do bloco definimos os métodos que devem ser requeridos

Para utilizar usamos a plavra `implements` logo após o nome da `Class` e passamos o nome da interface
```
class Bar implements Foo
{
    ...código aqui
}
```

 Se os métodos não forem declarados ou esquecer algum parâmetro. Será apresentando um erro falando o que está faltando.