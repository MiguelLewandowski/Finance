<?php

namespace Source\Controller\Pages;

use \Source\Utils\View;
use \Source\Db\Connect;

class Home{

    /** 
    *  @return string;
    */
    
    public static function getHome(){

        return View::render('pages/home');
        //View::render('pages/home');
    
    }


}