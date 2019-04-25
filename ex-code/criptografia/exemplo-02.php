<?php
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));
$data = [
	"nome" => "Hcode"
];
$openssl = openssl_encrypt(
	json_encode($data), // criptando a string
	'AES-128-CBC', // algoritmo utilizado
	SECRET, // chave um
	0, // ele só encripta e não precisa retornar nada.
	SECRET_IV // chave dois.
);
echo $openssl;

// Decriptando a senha.

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
var_dump(json_decode($string, true));