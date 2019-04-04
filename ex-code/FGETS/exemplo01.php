<?php

   // Lendo arquivo CSV para transformar em qualquer coisa.

   $fileName = "usuarios.csv";

   if(file_exists($fileName)) {
       $file = fopen($fileName, "r"); // aqui já abrimos sem checar que ele existe por já fazemos isso no if.

       $headers = explode(",", fgets($file));
       $data = array();

       while ($row = fgets($file)){ // Enquanto não retornar false é executado o bloco.

            $rowData = explode(",", $row); // Explodimos a linha por linha num array
            $linha = array();

            for ($i=0; $i < count($headers); $i++) { 
                // Montamos propriedade : valor
                $linha[$headers[$i]] = $rowData[$i];

            }

            array_push($data, $linha);

       }
       fclose($file);

       echo json_encode($data);
   }
   
?>