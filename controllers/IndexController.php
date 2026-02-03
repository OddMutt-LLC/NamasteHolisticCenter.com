<?php

namespace Controllers;

use MVC\Router;

class IndexController {
    public static function index(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('index/index', [
            'titulo' => 'Home Page',
            'alertas' => $alertas
        ]);
    }
}