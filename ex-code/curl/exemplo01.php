<?php
    $cep = "01310100";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link); // Iniciando a biblioteca curl

    // Setando configurações
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch); // iniciamos a conexão

    curl_close($ch); // fechamos a conexão

    $data = json_decode($response, true); // passamos true para ele virar um array

    print_r($data["localidade"]);

?>

