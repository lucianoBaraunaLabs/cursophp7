
# Preparando o Ambiente

Para criarmos a tabela usamos o comando `CREATE TABLE foo()` passando o nome da 
tabela a ser criada.

Existem algumas boas práticas para nomeações:
- `tb_` - ajuda a dizer que é uma tabela.
- `id` - antes do nome da coluna ajuda a dizer que a coluna tem uma referência a ID.
- `des` - ajuda a dizer que a coluna é descritiva.

## Create table
Comando utilizado para criar tabela. O argumento são os nomes das colunas e
suas configurações.
```
CREATE TABLE foo()
```
Criando a tabela usuários
- idusuario - coluna do tipo inteira que não permite nulos que se auto incrementa e possui uma chave primária.
- deslogin - aceita 64 caracteres e não permite nulo.
- dessenha - o campo é 256 caracteres por que vamos encriptar a senha do usuário por motivos de segurança.
- dtcadstro - guarda a data de criação tomando como base a hora do servidor.

```
CREATE TABLE tb_usuarios( 
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    deslogin VARCHAR(64) NOT NULL,    
    dessenha VARCHAR(256) NOT NULL,
    dtcadstro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
```

## Update
Para atualizar uma linha basta utilizar o comando update e passando a tabela, 
campo e linha.

```
-- Atualizando a coluna dessenha da linha que possui idusuario = 1
UPDATE  tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
```

## Delete
O comando delete sempre deixa rastro ao deletar um alinha. Ex: se vc deletar
o `id 1` quando for criado um novo `id` ele passara a ser `id 2` e não `id 1`.
```
-- deletando a linha que possui idusuario = 1;
DELETE FROM tb_usuarios WHERE idusuario = 1;
```

## TRUNCATE
O comando truncate deleta totalmente a tabela. Removendo inclusive os rastreios
como sitado no exemplo da explicação do delete. **MUITO CUIDADO COM ESSE COMANDO**

Para utiliza-lô você precisa escrever o comando e passar o nome da tabela.

```
TRUNCATE TABLE tb_usuarios;
```
