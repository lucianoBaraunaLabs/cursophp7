<?php 
$email = $_POST["inputEmail"];
// var_dump($_POST);

$ch = curl_init();

// Configurando url do google e checando ssl
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify"); // Url que o google precisa para autorizar.
// Não precisa certificar como um ssl.
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// ----

// Enviando os campos
// http_build_query - já monta uma url no formato de query
// $_SERVER['REMOTE_ADDR'] pega o ip do usuário

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'secret'   => '', 
    'response' => $_POST["g-recaptcha-response"],
	'remoteip' => $_SERVER['REMOTE_ADDR'] // pega o ip do usuário
)));

// Pegando a resposta do google
// CURLOPT_RETURNTRANSFER - seta a espera de um retorno
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptach =  json_decode(curl_exec($ch), true);

curl_close($ch);

if($recaptach["success"] === true){
    echo "OK: ".$_POST["inputEmail"];
} else {
    // Envia novamente para a página do formuĺário
    header("Location: exemplo04.php");
};


?>