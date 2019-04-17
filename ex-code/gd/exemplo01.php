<?php

// Seta o tipo do arquivo. Estamos dizendo que esse arquivo é uma imagem
header("Content-Type: image/png"); 

$image = imagecreate(256, 256); // Criando uma imagem

$black = imagecolorallocate($image, 0, 0, 0); // criando uma cor de fundo
$red = imagecolorallocate($image, 255, 0, 0); // vermelho

// Criando um texto, tamanho da font, x, y, texto, cor do texto
imagestring($image, 5, 60, 120, "Meu texto é esse", $red);

imagepng($image); // Gerando uma imagem png

imagedestroy($image); // destroi a imagem para não ficar na memória.

?>