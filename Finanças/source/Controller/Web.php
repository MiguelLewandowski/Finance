<?php

namespace Source\Controller;
use  \Source\Db\Database;
use  \Source\Controller\Pages\Home;
use  \Source\Controller\Pages\Balance;

class Web{

    public function home() {
        echo Home::getHome();
    }

    public function balance() {
        echo Balance::getBalance();
    }

}