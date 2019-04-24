<?php 

    require_once("vendor/autoload.php");

    // Iniciando o slim pelo namespace da class
    $app = new \Slim\Slim();

    // Criando uma rota com o get com o parâmetro name
    $app->get('/', function ()
    {
        echo "Home page ", json_encode(array(
            'date'=>date("Y-m-d H:i:s")
        ));
    });

    // Criando uma rota com o get com o parâmetro name
    $app->get('/hello/:name', function ($name)
    {
        echo "Hello, " . $name;
    });

    // Depois de declarar tudo executamos o run.
    $app->run();


?>