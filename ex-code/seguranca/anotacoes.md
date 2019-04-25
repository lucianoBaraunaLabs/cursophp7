# Segurança no PHP

### Command injection
Essa forma de ataque utiliza a função `system` que por sua vez dá a possibilidade
de executar comandos operacionais do sistema.

Esse ataque é muito utilizado em campos de formulários.

Uma solução para previnir esse tipo de ataque é utilizar a função `escapeshellarg` para
tratar o valor vindo do input
```
$cmd = escapeshellarg($_POST['cmd']);
```

### Sql Injection
Para evitarmos os ataques nós devemos utilizar o PDO junto dos bindparams.

### Permissões de pastas

O segundo argumento da função `mkdir()` recebe a permissão que você quer dar para
a pasta criada. 

- `0` - sem permissão nenhuma
- `1` - permissão de execução
- `2` - permissão de gravação
- `3` - permissão de execução e gravação
- `4` - permissão somente de leitura (não grava e nem executa)
- `5` - permissão de leitura e execução
- `6` - permissão de leitura e gravação
- `7` - permissão de leitura, gravação e execução

### Exemplo de permissão no unix com `755`

- O primeiro digito que é o `7` representa o dono. Significa então que ele 
tem a permissão total.
- O segundo dígito que é o `5` são os grupos de usuários. Significa então que eles
tem a permissão de leitura e execução.
- O terceiro dígito que é o `5` são os grupos que reprenta quem acessa o sistema.
Esse grupo é preciso ter muito cuidado. No nosso exemplo eles tem a permissão
de leitura e execução.

### XSS
Para evitarmos o ataque basta utilizarmos a função `htmlentities`;