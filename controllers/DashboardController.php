<?php

namespace Controllers;

use MVC\Router;

class DashboardController { 
    public static function index(Router $router){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isAdmin()) {
            header('Location: /');
        }
        
        $router->render('admin/dashboard/index',[
            'titulo' => 'Admin Panel'
        ]);

    }
}