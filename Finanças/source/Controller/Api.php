<?php

namespace Source\Controller;
use  \Source\Db\Connect;
use PDO;

class Api{

    public static function Insert(){
        $bd = Connect::getInstance();
    
        $id = $_POST['id'];
        $price = $_POST['price'];
        $description = $_POST['description'];

}

}