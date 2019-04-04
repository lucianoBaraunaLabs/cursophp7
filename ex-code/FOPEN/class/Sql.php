<?php

class Sql extends PDO {
    private $conn;

    // Iniciando a coneção do banco quando inicia a class
    public function __construct() 
    {
        // Iniciando a conexão com o banco.
        $this->conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 
    }
    
    // Seta parâmetros para a query
    private function setParams($statement, $parameters = array())
    {
        // Executando o loop em todos os parâmetros.
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }
    
    // Seta um parâmetro para a query
    private function setParam($statement, $key, $value)
    {
        // Setando os valores e ligando eles.
        $statement->bindParam($key, $value);
    }

    // Prepara executa a query.
    public function query($rawQuery, $params = array())
    {
        // Preparando a query.
        $stmt = $this->conn->prepare($rawQuery);
        
        // Setando os parâmetros.
        $this->setParams($stmt, $params);

        // executando a query
        $stmt->execute();
        
        // retorno do resultado.
        return $stmt;

    }
    
    // Retorna o valor da query.
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC); // retorna somente os dados associativos
    }
}

?>