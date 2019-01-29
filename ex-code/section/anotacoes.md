# Sessões

Para iniciar uma sessão precisamos sempre chamar a função `session_start()` em
todo arquivo que precisar e por conta disso o ideal é criar um arquivo `config.php`
e likar ele em cada arquivo que for preciso.

```
session_start(); // Inicia uma sessão
$_SESSION['nome'] = "Luciano"; // Criando a variável de sessão com o valor nome

```

### Removendo a chave de sessão
```
unset($_SESSION['nome']);

```

### Criando id de uma sessão
```
echo session_id(); 

```
### Renegerando um id de uma sessão
```
session_regenerate_id();

```