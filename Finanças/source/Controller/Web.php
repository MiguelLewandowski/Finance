<?php

namespace Source\Controller;
use  \Source\Db\Database;
use  \Source\Controller\Pages\Home;

class Web{

    public function home() {
        echo Home::getHome();
    }

}