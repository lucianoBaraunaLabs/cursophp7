<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "epaminondas";
$password = "123456789";

$stmt->bindParam(LOGIN, $login);
$stmt->bindParam(PASSWORD, $password);

$stmt->execute(); 


echo 'Dados incluidos com sucesso';


?>
