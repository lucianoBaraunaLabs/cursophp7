<?php

$nome = 'Goku';

function teste() {
    global $nome;
    echo $nome.'<br />';
}

function teste2() {
    $nome = 'Vegeta';
    echo $nome.' '.'agora no teste2';
}

teste();
teste2();


?>


