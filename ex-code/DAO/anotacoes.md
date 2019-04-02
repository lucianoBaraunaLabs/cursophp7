# DAO

Objeto de acesso a dados, é um padrão para persistência de dados que permite separar regras de negócio das regras de acesso a banco de dados. Numa aplicação que utilize a arquitetura MVC, todas as funcionalidades de bancos de dados, tais como obter as conexões, mapear objetos para tipos de dados SQL ou executar comandos SQL, devem ser feitas por classes DAO[Fonte wikipedia](https://pt.wikipedia.org/wiki/Objeto_de_acesso_a_dados).

### Exemplo de código com DAO implementado.
Instanciamos a classe e utilizamos um método que para fazer a consulta que já traz
o retorno.

```
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
```