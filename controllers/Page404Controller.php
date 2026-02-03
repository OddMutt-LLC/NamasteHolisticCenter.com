<?php

namespace Controllers;

use MVC\Router;

class Page404Controller { 
    public static function error(Router $router){
        $router->render('404/404');
    }
}