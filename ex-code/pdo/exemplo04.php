<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Goku";
$password = "123456789";
$id = 4;

$stmt->bindParam(LOGIN, $login);
$stmt->bindParam(PASSWORD, $password);
$stmt->bindParam(ID, $id);

$stmt->execute(); 


echo 'Dados alterados com sucesso';


?>
