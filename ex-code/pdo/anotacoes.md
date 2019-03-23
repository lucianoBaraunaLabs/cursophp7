# Banco de dados com PDO

O PDO é uma interface que ajuda a fazer a conexão com diversos tipos de banco de dados no PHP

### Nomenclaturas de variáveis.
- $conn - Conexão
- $stmt - Statment (comando)
- $stmt - Statment (comando)

### Iniciano uma conexão MySql
Para criarmos uma conexão com banco nós instanciamos a classe e passomos os seguitnes argumentos: nome do banco, host, usario, senha.

```
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 
```

### Criando querys.
Utilizamos o métodos `prepare` para criar as querys. E executamos o código com `execute`.
```
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute()
```

### Insert
O método `prepare` recebe o comando sql que vamos executar.

O PDO consegue indentificar aonde estamos passando os parâmetros. 

Em `VALUES` conseguimos estipular a ordem dos parâmetros seguindo de `:` com o nome que você quer. 

Esse valor passado é como se fosse um `id` e deve ser único a menos que se repita em mais de um lugar. 

Recomenda-se que esse nome seja em maiúsculo para fins de padrão. Essa prática de passagem é recomendada pois ela inibi ataques hackers com sql injection, ajuda também na prevenção de possíveis erros por grafia e tratamento de valores.

Após a preparação do comando precisamos ligar os valores aos parâmetros e fazemos
isso com `bindParam` onde ele recebe como primeiro parâmetro o nome do paramêtro
setado em `VALUES` e o segundo o valor.

```
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "epaminondas";
$password = "123456789";

$stmt->bindParam(LOGIN, $login);
$stmt->bindParam(PASSWORD, $password);
```

Uma outra forma que podemos passar os parâmetros no PDO é utilizando `?`, dessa 
forma no método execute nos precisamos passar os valores como `array` e a ordem
será a mesma ordem que estão sendo passados a `?` nos valores atribuidos em `prepare`.

```
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));
```


### Update
Recomenda-se sempre que fazer um update ele deve ter um `WHERE`. Caso não seja usado
com o `WHERE` nós atualizamos toda a tabela e assim podemos atualizar dados que não
queremos.

```
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
```

### Delete
Recomenda-se sempre que fazer um delete ele deve ter um `WHERE`. Caso não seja usado
com o `WHERE` nós deletamos toda a tabela.

```
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

```

### Transações
Um banco possui transações para manter seguração na hora de executar os códigos.

Existes comandos `commit` para confirmar e `roolback` para voltar ou não deixar
o comando ser executado. Alguns bancos de dados usam comandos diferentes mais 
como estamos usando o PDO ele trata essas diferenças. Sendo assim utilizamos 
`commit` e `roolback`.

Iniciamos a transação antes do `statment` com `beginTransaction`.

```
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = 4;

$stmt->execute(array($id));
```

E voltamos ou não deixamos executar ou aceitar o comando após o `execute`
```
// $conn->rollBack();
$conn->commit();
```