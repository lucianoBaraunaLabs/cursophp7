<?php

// Setando o tipo do arquivo.
header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

// Novas dimensões.
$new_width = 256;
$new_height = 256;

// Pegando as dimensões das imagem
list($old_width, $old_height) = getimagesize($file); // Pegando valores dos 2 primeiros itens do array.

// Criando o thumbnail
$new_image = imagecreatetruecolor($new_width, $new_height); // Criando uma nova imagem com 16 mil cores
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

// Cria a visualização da imagem no navegador. 
imagejpeg($new_image);

// Destroi as imagens da memória
imagedestroy($old_image);
imagedestroy($new_image);



?>