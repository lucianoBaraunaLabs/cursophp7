<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" >
    <button type="submit">Send</button>
</form>

<?php

// $_SERVER["REQUEST_METHOD"] - guarda o tipo de requisição feita para servidor.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"]; // Pegando o arquivo.
    
    // Tratando o erro caso não tenha arquivo.
    if($file["error"]) {
        throw new Exception("Error: ".$file["error"]);
        
    }

    // Criando um diretório para salvar os aquivos. Precisamos fazer isso para garantir que temos um diretório de escrita e leitura dentro do servidor.
    $dirUploads =  "uploads";

    // Se o diretório não existe.
    if(!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }
    var_dump($file);
    // Caso o upload tenha acontecido
    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo 'Upload realizado com sucesso!';
    } else {
        throw new Exception("Não foi possível realizar o upload.");
        
    }
}

?>