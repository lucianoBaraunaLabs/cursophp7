# Try Catch

É uma condição que utilizamos para tratar algum erro.
Geralmente é utilizado a class Exception para tratar as mensagens de erro.

## Criando um tratamento de erro

O bloco Throw representa a exeção do erro. O primeiro argumeto é a mensagem de erro
e o segundo é o código do mesmo.

```
throw new Exception("Houver um erro..", 400);
```

Para conseguirmos realizar esse tratamento nós utilizamos o bloco 
`try / catch / finally`. Dentro de `try` passamos nossa função, em catch nós

- `try` - Dentro dele passamos nossa função.
- `catch` - Passamos nosso retorno do erro caso aconteça. Por padrão utilizamos uma
variável `$e` que simboliza o erro.
- `finally` - É nosso código que sempre será executado após a execução do bloco
independente se passou ou não pelo `catch`. Podemos utilizar o `finally` para 
o envio de um email.
