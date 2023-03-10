<?php

namespace Source\Controller;
use  \Source\Db\Connect;
use  \Source\Controller\Pages\Home;
use  \Source\Controller\Pages\Balance;
use PDO;

class Web{

    public function home() {
        echo Home::getHome();
    }

    public function balance() {
        //Imprime o HTML da página
        $db =  Connect::getInstance();

        /**
         * IMPRIME A PARTE DINÂMICA DA PÁGINA
         */

        //Consulta os dados da tabela addon
        $sql = "SELECT * FROM addon";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Consulta os dados da tabela give
        $sql2 = "SELECT * FROM give";
        $stmt2 = $db->prepare($sql2);
        $stmt2->execute();
        $dados2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        //Exibe os dados na tela
        if (count($dados) > 0) {
            //Link Bootstrap
            echo " <div class='container-fluid bg-dark text-light'>";
            //Mostra a tabela addon
            echo "<div class='container text-light text-center bg-dark'>
            <div class='row align-items-start text-light'>
              <div class='col-6' id='profit'>
                <h3 class='p-3'> PROFIT </h3>" ;
            echo "<table class='table text-light col-4'>";
            echo "<thead><tr><th>Price</th><th>Description</th></tr></thead>";
            echo "<tbody>";
            foreach ($dados as $linha) {
              echo "<tr>"."</td><td class='preco'>".$linha['price'].",00</td><td>".$linha['description']."</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div> ";

            //mostra a tabela give
            if (count($dados2) > 0) {
              echo "<div class='col-6' id='expenses'>
              <h3 class='p-3'> LOSS </h3>";
              echo "<table class='table text-light col-4'>";
              echo "<thead><tr><th>Price</th><th>Description</th></tr></thead>";
              echo "<tbody>";
              foreach ($dados2 as $linha) {
                echo "<tr>"."</td><td class='preco'>".$linha['price'].",00</td><td>".$linha['description']."</td></tr>";
              }
              echo "</tbody>";
              echo "</table>";
              echo "</div>";
              echo "</div> </div>  ";
            }
          } else {
            echo "Não há registros.";
          }

        echo Balance::getBalance();
        
    }

}