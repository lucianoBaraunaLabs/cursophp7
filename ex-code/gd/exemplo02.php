<?php
// Imagem base 
$image = imagecreatefromjpeg("certificado.jpg");

// Títulos
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Textos
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

// Setando o tipo do arquivo.
header("Content-type: image/jpeg");

// Salvando a imagem, escrevendo o nome do arquivo, qualidade do arquivo.
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);

imagedestroy($image);


?>