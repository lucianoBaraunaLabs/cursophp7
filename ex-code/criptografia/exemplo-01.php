
<?php
$data = [
	"nome" => "Hcode"
];

// Criando uma constante colocando e utilizamos a função pack pq o mycrypt exige
// um valor com 16 caracteres
define('SECRET', pack('a16', 'senha')); 

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128, // algortimo de criptografia
	SECRET, // senha 
	json_encode($data), // a string que vai ser criptografada
	MCRYPT_MODE_ECB // modo de criptografia utilizado
);


$final = base64_encode($mcrypt);
var_dump($final);
$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128,
	SECRET,
	base64_decode($final),
	MCRYPT_MODE_ECB
);
var_dump(json_decode($string, true));