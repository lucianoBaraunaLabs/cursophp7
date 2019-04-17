<?php
// Imagem base 
$image = imagecreatefromjpeg("certificado.jpg");

// Títulos
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Textos
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

// Setando o tipo do arquivo.
header("Content-type: image/jpeg");

// Salvando a imagem, escrevendo o nome do arquivo, qualidade do arquivo.
imagejpeg($image);

imagedestroy($image);


?>