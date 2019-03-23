<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(ID, $id);

$stmt->execute(); 


echo 'Dados deletados com sucesso';


?>
