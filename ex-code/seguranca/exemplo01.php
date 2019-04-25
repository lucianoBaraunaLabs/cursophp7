<?php 

// Exemplo de command injection

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    // // pegando todo o comando que for digitando no campo input
    // $cmd = $_POST['cmd']; 

    // Tratando o post

    $cmd = escapeshellarg($_POST['cmd']);

    var_dump($cmd);
    
    echo "<pre>";
    
    $comando = system($cmd, $retorno);
    
    echo "</pre>";
}
?>

<form method="post">
    <input type="text" name="cmd" id="">
    <button type="submit">Enviar</button>
</form>