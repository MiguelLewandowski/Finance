<?php

namespace Source\Controller;
use  \Source\Db\Connect;
use PDO;

class Api{

    public static function insertAdd(){
      
        $db =  Connect::getInstance();
        $price = $_POST['price'];
        $description = $_POST['description'];

        if (!empty($price) && !empty($description)){

        
            $insert = "INSERT INTO addon (price,description) 
                        VALUES ('{$price}','{$description}')";
        
        try{
            $query = $db->query($insert);
            header('Location:http://localhost/projetos/Finanças');
        /** var_dump(
        *        $query,
        *        $bd->lastInsertId(),
        *        $query->errorInfo()
        *   );
        */      
        }catch (PDOException $exception) {
        //var_dump($exception);
        } 
        }else{
            echo "O campo preço e descrição não pode ser nada"; 
        }
}

    public static function insertGive(){
      
        $db =  Connect::getInstance();
        $price = $_POST['price'];
        $description = $_POST['description'];

        if (!empty($price) && !empty($description)){

        
            $insert = "INSERT INTO give (price,description) 
                        VALUES ('{$price}','{$description}')";
        
        try{
            $query = $db->query($insert);
            header('Location:http://localhost/projetos/Finanças');
        /** var_dump(
        *        $query,
        *        $bd->lastInsertId(),
        *        $query->errorInfo()
        *   );
        */      
        }catch (PDOException $exception) {
        //var_dump($exception);
        } 
        }else{
        echo "O campo preço e descrição não pode ser nada"; 
        }
    }

    public static function selectTable(){

        $db =  Connect::getInstance();
        //Consulta os dados da tabela
        $sql = "SELECT * FROM addon";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Exibe os dados na tela
        if (count($dados) > 0) {
            echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>";
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Price</th><th>Description</th></tr></thead>";
            echo "<tbody>";
            foreach ($dados as $linha) {
              echo "<tr>"."</td><td>".$linha['price']."</td><td>".$linha['description']."</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
          } else {
            echo "Não há registros.";
          }

}

}