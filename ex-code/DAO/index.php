<?php

require_once("config.php");

// Usando somente a classe sql.
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Usando a class sql em conjunto.

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

// Carrega uma lista de usuários.
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("jose", "123");
// echo $usuario;


// Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(4);
// $usuario->update("professor", "!@#$%¨&*");
// echo $usuario;

// Deletar
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;


?>