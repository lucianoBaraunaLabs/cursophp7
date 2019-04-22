<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1><?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <h2>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eos praesentium excepturi, tempore incidunt et itaque nam molestias quo commodi? Fuga minima perferendis magnam nesciunt dolorum fugit quas unde assumenda.</p>
    
</body>
</html>