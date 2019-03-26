<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute(); // Executa os comandos

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // O método PDO::FETCH_ASSOC retorna tudo em forma indexada

echo json_encode($results); // retornando em json

// foreach ($results as $row) {
//     foreach ($row as $key => $value) {
//         echo "<strong> ".$key.": </strong>".$value."<br/>";
//     }
//     echo "=========================";
// }

// var_dump($results);

?>
