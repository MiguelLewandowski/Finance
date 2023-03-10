<?php

namespace Source\Controller\Pages;

use \Source\Utils\View;
use \Source\Db\Connect;

class Balance{

    /** 
    *  @return string;
    */
    
    public static function getBalance(){

        return View::render('pages/balance');
        //View::render('pages/home');
    
    }


}