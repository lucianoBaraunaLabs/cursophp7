<?php
    $data = array(
        "empresa"=>"Baraúna \O/"
    );
    // Setando o cookie com uma validade de 2hs
    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
    echo "OK";

?>
